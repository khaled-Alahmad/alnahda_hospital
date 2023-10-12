<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\User;

class PatientController extends Controller
{
    public function index()
    {
        $patients = Patient::all();
        return view('patients.index', compact('patients'));
    }

    public function create()
    {
        $users = User::whereDoesntHave('doctors')
            ->whereDoesntHave('patients')
            ->whereHas('role', function ($query) {
                $query->where('role', '!=', 'admin');
            })
            ->get();
        return view('patients.create', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required',
        ]);

        Patient::create([
            'user_id' => $request->input('user_id'),
        ]);
        notify()->success('تمت إضافة المريض بنجاح');

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
        $users = User::all();
        $patient = Patient::find($id);
        return view('patients.edit', compact('patient', 'users'));
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
        notify()->success('تم تحديث بيانات المريض بنجاح');

        return redirect()->route('patients.index')
            ->with('success', 'تم تحديث بيانات المريض بنجاح');
    }

    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        notify()->success('تم حذف المريض بنجاح');

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
