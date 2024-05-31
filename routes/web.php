<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatientController;

Route::get('/', function () {
    return view('registration');
});

Route::get('/register', [PatientController::class, 'createPatient'])->name('registration');
Route::post('/register', [PatientController::class, 'addPatient'])->name('addPatient');