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
            return redirect()->back()->with('error', 'مريض غير موجود');
        }

        $appointments = $patient->previews;

        return view('reports.patient_reports', compact('patient', 'appointments'));
    }


    public function doctorReports($id)
    {
        $doctor = Doctor::findOrFail($id);
        $operations = $doctor->operations;

        // تمرير البيانات إلى عرض Blade
        return view('doctor_reports', compact('doctor', 'operations'));
    }
}
