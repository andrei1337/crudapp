@extends('inc.layout')
@section('content')
    <h1>Edit Employee</h1>
    {!! Form::open(['action' => ['EmployeesController@update', $employee->id], 'method' => 'POST']) !!}
        <div class = "form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $employee->name, ['class' => 'form-control', 'placeholder' => 'Employee Name'])}}
        </div>
        <div class = "form-group">
            {{Form::label('company_name', 'Company Name')}}
            {{Form::text('company_name', $employee->company_name, ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection