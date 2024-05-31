<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    // public function showPatient(){
    //     return view('registration');
    // }

    public function createPatient(){
        return view('registration');
    }

    public function addPatient(Request $request){
        $patientData = $request->validate([
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'nullable',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'marital_status' => 'required',
            'home_address' => 'required',
            'contact_number' => 'required',
            'email_address' => 'required',
            'last_dentist_visit' => 'required|date',
            'had_cavities' => 'required',
            'have_tooth_sensitivity' => 'required',
            'grind_or_clench_teeth' => 'required',
            'had_oral_surgeries' => 'required',
            'had_braces_or_orthodontic_treatments' => 'required',
            'have_gum_disease' => 'required',
            'do_gums_bleed' => 'required',
            'gum_recession_or_gum_grafting' => 'required',
            'lost_teeth_due_to_decay_or_injury' => 'required',
            'have_dental_implants' => 'required',
            'have_crowns_bridges_or_dentures' => 'required',
            'brush_teeth_at_least_twice_a_day' => 'required',
            'floss_daily' => 'required',
            'taking_medications' => 'required',
            'consume_sugary_or_acidic_foods' => 'required',
            'is_smoking' => 'required',
            'drink_coffee_tea_or_red_wine' => 'required',
            'medical_conditions' => 'nullable',
            'allergy' => 'nullable',
            'username' => 'required',
            'password' => 'required',
        ]);

        dd($patientData);
        $newPatient = Patient::create($patientData);

        return redirect()->route('registration');

    }
}
