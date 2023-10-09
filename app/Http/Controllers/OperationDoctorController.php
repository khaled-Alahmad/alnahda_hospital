<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Operation;
use App\Models\OperationDoctor;
use Illuminate\Http\Request;

class OperationDoctorController extends Controller
{
    public function index()
    {
        $operationDoctors = OperationDoctor::all();
        return view('operation_doctors.index', compact('operationDoctors'));
    }

    public function create()
    {
        $doctors = Doctor::all();
        $operations = Operation::all();
        return view('operation_doctors.create', compact('doctors', 'operations'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'operation_id' => 'required|exists:operations,id',
        ]);

        OperationDoctor::create([
            'doctor_id' => $request->input('doctor_id'),
            'operation_id' => $request->input('operation_id'),
        ]);

        return redirect()->route('operation-doctors.index')
            ->with('success', 'تم إنشاء سجل العملية بنجاح');
    }

    public function show($id)
    {
        $operationDoctor = OperationDoctor::findOrFail($id);
        return view('operation_doctors.show', compact('operationDoctor'));
    }

    public function edit($id)
    {
        $doctors = Doctor::all();
        $operations = Operation::all();
        $operationDoctor = OperationDoctor::findOrFail($id);
        // عرض نموذج التعديل
        return view('operation_doctors.edit', compact('operationDoctor', 'doctors', 'operations'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'operation_id' => 'required|exists:operations,id',
        ]);

        $operationDoctor = OperationDoctor::findOrFail($id);
        $operationDoctor->update([
            'doctor_id' => $request->input('doctor_id'),
            'operation_id' => $request->input('operation_id'),
        ]);

        return redirect()->route('operation-doctors.index')
            ->with('success', 'تم تحديث سجل العملية بنجاح');
    }

    public function destroy($id)
    {
        $operationDoctor = OperationDoctor::findOrFail($id);
        $operationDoctor->delete();

        return redirect()->route('operation-doctors.index')
            ->with('success', 'تم حذف سجل العملية بنجاح');
    }

    public function search(Request $request)
    {
        $doctorId = $request->input('doctor_id');
        $operationId = $request->input('operation_id');

        $query = OperationDoctor::query();

        if ($doctorId) {
            $query->where('doctor_id', $doctorId);
        }

        if ($operationId) {
            $query->where('operation_id', $operationId);
        }

        $operationDoctors = $query->get();

        return view('operation_doctors.index', compact('operationDoctors'));
    }
}
