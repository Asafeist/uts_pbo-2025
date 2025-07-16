<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use App\Models\Patient;

use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function create()
    {
        $doctors = Doctor::all();
        $patients = Patient::all();

        return view('appointments.create', compact('doctors', 'patients'));
    }
}
