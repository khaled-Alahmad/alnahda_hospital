<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use App\Models\Operation;
use App\Models\Patient;
use App\Models\Preview;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function welcome()
    {
        $doctors = Doctor::all();
        return view('welcome', compact('doctors'));
    }
    public function dashboard()
    {
        $countDoctor = Doctor::count();
        $countPatient = Patient::count();
        $countPreview = Preview::count();
        $countOperation = Operation::count();

        return view('dashboard', compact('countDoctor', 'countPatient', 'countPreview', 'countOperation'));
    }
}
