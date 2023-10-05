<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoctorDepartment;

class DoctorDepartmentController extends Controller
{
    public function index()
    {
        $departments = DoctorDepartment::all();
        return view('doctor_departments.index', compact('departments'));
    }

    public function create()
    {
        return view('doctor_departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|max:160',
            'description' => 'nullable',
        ]);

        DoctorDepartment::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('doctor-departments.index')
            ->with('success', 'تمت إضافة القسم الطبي بنجاح');
    }

    public function show($id)
    {
        $department = DoctorDepartment::find($id);
        return view('doctor_departments.show', compact('department'));
    }

    public function edit($id)
    {
        $department = DoctorDepartment::find($id);
        return view('doctor_departments.edit', compact('department'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|max:160',
            'description' => 'nullable',
        ]);

        $department = DoctorDepartment::find($id);
        $department->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('doctor-departments.index')
            ->with('success', 'تم تحديث القسم الطبي بنجاح');
    }

    public function destroy($id)
    {
        $department = DoctorDepartment::find($id);
        $department->delete();

        return redirect()->route('doctor-departments.index')
            ->with('success', 'تم حذف القسم الطبي بنجاح');
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $departments = DoctorDepartment::where('title', 'like', "%$searchTerm%")
            ->orWhere('description', 'like', "%$searchTerm%")
            ->get();

        return view('doctor_departments.index', compact('departments'));
    }
}
