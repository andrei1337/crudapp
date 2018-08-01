@extends('inc.layout')
@section('content')
    <h1>Add Company</h1>
    {!! Form::open(['action' => 'CompaniesController@store', 'method' => 'POST']) !!}
        <div class = "form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Company Name'])}}
        </div>
        <div class = "form-group">
            {{Form::label('description', 'Description')}}
            {{Form::text('description', '', ['class' => 'form-control', 'placeholder' => 'Description'])}}
        </div>
        {{Form::submit('Submit', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection