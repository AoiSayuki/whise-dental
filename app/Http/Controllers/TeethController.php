<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teeth;

class TeethController extends Controller
{
    //
    public function displayTeeth(){
        return view('patientDetails');
    }
}
