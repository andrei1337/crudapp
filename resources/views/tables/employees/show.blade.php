@extends('inc.layout')
@section('content')
    <a href = "/companies" class = "btn btn-primary">Back</a>
    <div class = "show">
        <h3><a href = "/employees/{{$employee->id}}">{{$employee->name}}</a></h3>
        <p>Works for: {{$employee->company_name}}.</p>
    </div>
    <hr>
    <a href= "/employees/{{$employee->id}}/edit" class = "btn btn-success">Edit</a>

    {!!Form::open(['action' => ['EmployeesController@destroy', $employee->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection