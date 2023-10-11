<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    public function patientReport()
    {
        return view('reports.patient_reports');
    }
    public function patientReports(Request $request)
    {
        $id = $request->input('id');

        $patient = Patient::find($id);

        if (!$patient) {
            notify()->error('مريض غير موجود');

            return redirect()->back()->with('error', 'مريض غير موجود');
        }

        $appointments = $patient->previews;

        return view('reports.patient_reports', compact('patient', 'appointments'));
    }

    public function doctorReport()
    {
        return view('reports.doctor_reports');
    }
    public function doctorReports(Request $request)
    {
        $id = $request->input('id');
        $doctor = Doctor::findOrFail($id);
        if (!$doctor) {
            notify()->error('طبيب غير موجود');

            return redirect()->back()->with('error', 'طبيب غير موجود');
        }
        $previews = $doctor->preview;
        $operations = $doctor->operations;
        return view('reports.doctor_reports', compact('doctor', 'operations', 'previews'));
    }
}
