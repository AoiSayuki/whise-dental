<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Validation\ValidationException;

class PatientController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

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

        //dd($patientData);
        $newPatient = Patient::create($patientData);

        return redirect()->route('registration');

    }

    public function login(){
        return view('login');
    }

    // public function loginAction(Request $request){
    //     Validator::make($request->all(), [
    //         'username'=> 'required',
    //         'password'=> 'required'
    //     ])->validate();

    //     if (!Auth::attempt($request->only('username','password'), $request->boolean('remember'))){
    //         throw ValidationException::withMessages(['username'=> trans('auth.failed')]);
    //     }

    //     $request->session()->regenerate();

    //     return redirect()->route('welcome');
    // }

    public function loginAction(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $patient = Patient::where('username', $request->username)->first();

        if ($patient && $patient->password === $request->password) {
            Auth::guard('patient')->login($patient);
            return redirect()->route('welcome');
        }

        // $credentials = $request->only('username', 'password');
        // if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
        //     return redirect()->route('welcome');
        // }
        // return redirect(route('login'))->with("error", "Login details are not valid");
    }
}
