@extends('inc.layout')
@section('content')
    <a href = "/companies" class = "btn btn-primary">Back</a>
    <div class = "show">
        <h1>{{$company->name}}</h1>
        <p>Description: {{$company->description}}</p>
    </div>
    <hr>
    <a href= "/companies/{{$company->id}}/edit" class = "btn btn-success">Edit</a>

    {!!Form::open(['action' => ['CompaniesController@destroy', $company->id], 'method' => 'POST', 'class' => 'float-right'])!!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!!Form::close()!!}
@endsection