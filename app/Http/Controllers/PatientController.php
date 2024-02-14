<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patientlist;

class PatientController extends Controller{
    public function index(){
        $data = Patientlist::all();
        return view('patients.patient',compact('data'));
    }

    public function add(){
        return view('patients.add-patient');
    }

    public function insert(Request $request){
        
        $insert = Patientlist::insert([
            'patient_name' => $request['patient_name'],
            'patient_phone' => $request['patient_phone'],
            'patient_email' => $request['patient_email'],
            'patient_category' => $request['patient_category'],
            'patient_address' => $request['patient_address'],
        ]);

        if($insert){
            return redirect('dashboard/patient');
        }
    }
}
