<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teeth;

class TeethController extends Controller
{
    //
    public function editTeeth(){
        $teeth = Teeth::all();
        return view('editTeeth', ['teeth' => $teeth]); 
    }

    public function addTeeth(Request $request){
        $teethData = $request->validate([
            'tooth_1' => 'string',
            'tooth_2' => 'string',
            'tooth_3' => 'string',
            'tooth_4' => 'string',
            'tooth_5' => 'string',
            'tooth_6' => 'string',
            'tooth_7' => 'string',
            'tooth_8' => 'string',
            'tooth_9' => 'string',
            'tooth_10' => 'string',
            'tooth_11' => 'string',
            'tooth_12' => 'string',
            'tooth_13' => 'string',
            'tooth_14' => 'string',
            'tooth_15' => 'string',
            'tooth_16' => 'string',
            'tooth_17' => 'string',
            'tooth_18' => 'string',
            'tooth_19' => 'string',
            'tooth_20' => 'string',
            'tooth_21' => 'string',
            'tooth_22' => 'string',
            'tooth_23' => 'string',
            'tooth_24' => 'string',
            'tooth_25' => 'string',
            'tooth_26' => 'string',
            'tooth_27' => 'string',
            'tooth_28' => 'string',
            'tooth_29' => 'string',
            'tooth_30' => 'string',
            'tooth_31' => 'string',
            'tooth_32' => 'string',
        ]);
        //dd($teethData);
        $newTeeth = Teeth::create($teethData);

        return redirect(route('addTeeth'));
    }
}
