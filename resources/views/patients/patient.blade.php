@extends('layouts/master')
@section('contents')
    <div class="container">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Patient List</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-sm btn-primary" href="{{url('dashboard/patient/add')}}">Add Patient</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Patient Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Address</th>
                    <th>Manage</th>
                </tr>
            </thead>
                @foreach($data as $data)
                    <tbody>
                        <tr>
                            <td>{{ $data->patient_id }}</td>
                            <td>{{ $data->patient_name }}</td>
                            <td>{{ $data->patient_phone }}</td>
                            <td>{{ $data->patient_email }}</td>
                            <td>{{ $data->patient_category }}</td>
                            <td>{{ $data->patient_address }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                @endforeach
        </table>
    </div>
@endsection