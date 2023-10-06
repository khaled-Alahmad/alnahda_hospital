<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;
use App\Models\Operation;
use App\Models\Patient;
use App\Models\Preview;
use App\Models\Room;

class OperationController extends Controller
{
    public function index()
    {


        $operations = Operation::all();
        return view('operations.index', compact('operations'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        $previews = Preview::all();
        $rooms = Room::all();
        // إنشاء عملية جديدة
        return view('operations.create',compact( 'doctors', 'patients', 'previews', 'rooms'));
    }

    public function store(Request $request)
    {
        // حفظ العملية المنشأة في قاعدة البيانات
        Operation::create($request->all());

        return redirect()->route('operations.index')
            ->with('success', 'تم إنشاء العملية بنجاح.');
    }

    public function show($id)
    {
        $operation = Operation::findOrFail($id);
        return view('operations.show', compact('operation'));
    }

    public function edit($id)
    {
        $doctors = Doctor::all();
        $patients = Patient::all();
        $previews = Preview::all();
        $rooms = Room::all();
        $operation = Operation::findOrFail($id);
        return view('operations.edit', compact('operation', 'doctors', 'patients', 'previews', 'rooms'));
    }

    public function update(Request $request, $id)
    {
        $operation = Operation::findOrFail($id);
        $operation->update($request->all());

        return redirect()->route('operations.index')
            ->with('success', 'تم تحديث العملية بنجاح.');
    }

    public function destroy($id)
    {
        $operation = Operation::findOrFail($id);
        $operation->delete();

        return redirect()->route('operations.index')
            ->with('success', 'تم حذف العملية بنجاح.');
    }

    public function search(Request $request)
    {
        // استخراج المعايير من الطلب
        $doctorId = $request->input('doctor_id');
        $patientId = $request->input('patient_id');
        $previewId = $request->input('preview_id');
        $roomId = $request->input('room_id');
        $dateTime = $request->input('date_time');

        $query = Operation::query();

        if ($doctorId) {
            $query->where('doctor_id', $doctorId);
        }

        if ($patientId) {
            $query->where('patient_id', $patientId);
        }

        if ($previewId) {
            $query->where('preview_id', $previewId);
        }

        if ($roomId) {
            $query->where('room_id', $roomId);
        }

        if ($dateTime) {
            $query->where('date_time', $dateTime);
        }

        // تنفيذ الاستعلام واسترداد النتائج
        $operations = $query->get();

        return view('operations.index', compact('operations'));
    }
}
