<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Illness;
use App\Models\Patient;
use App\Models\Preview;
use Illuminate\Http\Request;

class PreviewController extends Controller
{
    public function index()
    {
        $previews = Preview::all();
        $doctors = Doctor::all();
        $patients = Patient::all();

        return view('previews.index', compact('previews', 'doctors', 'patients'));
    }

    public function create()
    {
        $illnesses = Illness::all();
        $doctors = Doctor::all();
        $patients = Patient::all();

        return view('previews.create', compact('illnesses', 'doctors', 'patients'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'status' => 'required|in:حجز,تمت المعاينة,قيد المعالجة',
            'preview_datetime' => 'required',
        ]);

        // Create a new preview
        Preview::create($request->all());
        notify()->success('تمت إضافة المعاينة بنجاح.');

        return redirect()->route('previews.index')->with('success', 'تمت إضافة المعاينة بنجاح.');
    }

    public function show($id)
    {
        $preview = Preview::findOrFail($id);
        return view('previews.show', compact('preview'));
    }

    public function edit($id)
    {
        $preview = Preview::findOrFail($id);
        return view('previews.edit', compact('preview'));
    }

    public function update(Request $request, $id)
    {
        // Validate the input data
        $request->validate([
            'patient_id' => 'required',
            'doctor_id' => 'required',
            'status' => 'required|in:حجز,تمت المعاينة,قيد المعالجة',
            'preview_datetime' => 'required|date',
        ]);

        // Update the preview
        $preview = Preview::findOrFail($id);
        $preview->update($request->all());
        notify()->success('تم تحديث المعاينة بنجاح.');

        return redirect()->route('previews.index')->with('success', 'تم تحديث المعاينة بنجاح.');
    }

    public function destroy($id)
    {
        $preview = Preview::findOrFail($id);
        $preview->delete();
        notify()->success('تم حذف المعاينة بنجاح.');

        return redirect()->route('previews.index')->with('success', 'تم حذف المعاينة بنجاح.');
    }

    public function search(Request $request)
    {
        // استخراج مصفوفة المعايير من الطلب
        $searchCriteria = $request->only(['patient_id', 'doctor_id', 'illness_id']);

        // بناء استعلام البحث باستخدام مصفوفة المعايير
        $previews = Preview::query();

        foreach ($searchCriteria as $field => $value) {
            if ($value) {
                $previews->where($field, $value);
            }
        }

        // تنفيذ الاستعلام واسترداد النتائج
        $results = $previews->get();

        return view('previews.index', compact('results'));
    }
}
