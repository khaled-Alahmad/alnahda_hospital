<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('doctors.index', compact('doctors'));
    }

    public function create()
    {
        return view('doctors.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
            'doctor_department_id' => 'required',
            'specialist' => 'required|max:255',
        ]);

        Doctor::create([
            'user_id' => $request->input('user_id'),
            'doctor_department_id' => $request->input('doctor_department_id'),
            'specialist' => $request->input('specialist'),
        ]);

        return redirect()->route('doctors.index')
            ->with('success', 'تمت إضافة الطبيب بنجاح');
    }

    public function show($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.show', compact('doctor'));
    }

    public function edit($id)
    {
        $doctor = Doctor::find($id);
        return view('doctors.edit', compact('doctor'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required',
            'doctor_department_id' => 'required',
            'specialist' => 'required|max:255',
        ]);

        $doctor = Doctor::find($id);
        $doctor->update([
            'user_id' => $request->input('user_id'),
            'doctor_department_id' => $request->input('doctor_department_id'),
            'specialist' => $request->input('specialist'),
        ]);

        return redirect()->route('doctors.index')
            ->with('success', 'تم تحديث بيانات الطبيب بنجاح');
    }

    public function destroy($id)
    {
        $doctor = Doctor::find($id);
        $doctor->delete();

        return redirect()->route('doctors.index')
            ->with('success', 'تم حذف الطبيب بنجاح');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $doctors = Doctor::where('specialist', 'like', "%$searchTerm%")
            ->orWhere('user_id', 'like', "%$searchTerm%")
            ->orWhere('doctor_department_id', 'like', "%$searchTerm%")
            ->get();

        return view('doctors.index', compact('doctors'));
    }
}
