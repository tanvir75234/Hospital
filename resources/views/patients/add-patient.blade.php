@extends('layouts/master')
@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <form method="post" action="{{url('dashboard/patient/submit')}}">
                    @csrf
                    <div class="card mb-3">
                        <div class="card-header">
                        <div class="row">
                            <div class="col-md-8 card_title_part">
                                <i class="fab fa-gg-circle"></i>Doctor Registration
                            </div>  
                            <div class="col-md-4 card_button_part">
                                <a href="{{ route('patient') }}" class="btn btn-sm btn-dark"><i class="fas fa-th"></i>All Patients</a>
                            </div>  
                        </div>
                        </div>
                        <div class="card-body">
                            <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Name<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="patient_name">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Phone:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="patient_phone">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Email<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="email" class="form-control form_control" id="" name="patient_email">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Category<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="patient_category">
                            </div>
                            </div>
                            <div class="row mb-3">
                            <label class="col-sm-3 col-form-label col_form_label">Address<span class="req_star">*</span>:</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control form_control" id="" name="patient_address">
                            </div>
                            </div>
                        <div class="card-footer text-center">
                        <button type="submit" class="btn btn-sm btn-dark">REGISTRATION</button>
                        </div>  
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection