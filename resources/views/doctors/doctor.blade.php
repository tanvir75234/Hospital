@extends('layouts/master')
@section('contents')
    <div class="container">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h3>Doctor List</h3>
                </div>
                <div class="col-md-6 text-end">
                    <a class="btn btn-sm btn-primary" href="{{url('dashboard/doctor/add')}}">Add Doctor</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Doc Name</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Category</th>
                    <th>Manage</th>
                </tr>
            </thead>
                @foreach($data as $data)
                    <tbody>
                        <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->doc_name }}</td>
                            <td>{{ $data->doc_phone }}</td>
                            <td>{{ $data->doc_email }}</td>
                            <td>{{ $data->doc_category }}</td>
                            <td></td>
                        </tr>
                    </tbody>
                @endforeach
        </table>
    </div>
@endsection