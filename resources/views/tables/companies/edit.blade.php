@extends('inc.layout')
@section('content')
    <h1>Edit Company</h1>
    {!! Form::open(['action' => ['CompaniesController@update', $company->id], 'method' => 'POST']) !!}
        <h3>Company Name: {{$company->name}}</h3>
        <div class = "form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', $company->description, ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection