@extends('inc.layout')
@section('content')
    <h1>All Employees</h1>
    @if(count($employees) > 0)
        @foreach($employees as $employee)
            <div class = "well">
                <h3><a href = "/employees/{{$employee->id}}">{{$employee->name}}</a></h3>
                <p>Works for: {{$employee->company_name}}.</p>
                <hr>
            </div>
        @endforeach

    @else
        <p class = "alert alert-danger">There are no employees in the database.</p>
    @endif
@endsection