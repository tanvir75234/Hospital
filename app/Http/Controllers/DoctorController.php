<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctorlist;

class DoctorController extends Controller{
    public function index(){
        $data = Doctorlist::all();
        return view('doctors.doctor',compact('data'));
    }

    public function add(){
        return view('doctors.add-doc');
    }

    public function insert(Request $request){

        $insert = Doctorlist::insert([
            'doc_name' => $request['doc_name'],
            'doc_phone' => $request['doc_phone'],
            'doc_email' => $request['doc_email'],
            'doc_category' => $request['doc_category'],
        ]);

        if($insert){
            return redirect('dashboard/doctor');
        }
    }
}
