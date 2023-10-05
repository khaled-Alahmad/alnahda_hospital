<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        return view('patients.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
        ]);

        Patient::create([
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('patients.index')
            ->with('success', 'تمت إضافة المريض بنجاح');
    }

    public function show($id)
    {
        $patient = Patient::find($id);
        return view('patients.show', compact('patient'));
    }

    public function edit($id)
    {
        $patient = Patient::find($id);
        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
        ]);

        $patient = Patient::find($id);
        $patient->update([
            'user_id' => $request->input('user_id'),
        ]);

        return redirect()->route('patients.index')
            ->with('success', 'تم تحديث بيانات المريض بنجاح');
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();

        return redirect()->route('patients.index')
            ->with('success', 'تم حذف المريض بنجاح');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $patients = Patient::where('user_id', 'like', "%$searchTerm%")->get();

        return view('patients.index', compact('patients'));
    }
}
