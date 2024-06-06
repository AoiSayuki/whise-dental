<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\TeethController;

Route::get('/', function () {
    return view('registration');
});

Route::get('/register', [PatientController::class, 'createPatient'])->name('registration');
Route::post('/register', [PatientController::class, 'addPatient'])->name('addPatient');

//login route
Route::get('/login',[PatientController::class,'login'])->name('login');
Route::post('/login',[PatientController::class,'loginAction'])->name('login.action');

Route::get('/welcome',[PatientController::class,'welcome'])->name('welcome');

Route::get('/adminDashboard', function () {
    return view('adminDashboard');
});

Route::get('/patientDetails', [TeethController::class, 'displayTeeth'])->name('patientDetails');