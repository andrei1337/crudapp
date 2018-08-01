@extends('inc.layout')
@section('content')
    <h1>Add Employee</h1>
    {!! Form::open(['action' => 'EmployeesController@store', 'method' => 'POST']) !!}
        <div class = "form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Employee Name'])}}
        </div>
        <div class = "form-group">
            {{Form::label('company_name', 'Company Name')}}
            {{Form::text('company_name', '', ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection