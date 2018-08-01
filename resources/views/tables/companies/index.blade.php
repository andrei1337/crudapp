@extends('inc.layout')
@section('content')
    <h1>All Companies</h1>
    @if(count($companies) > 0)
        @foreach($companies as $company)
            <div class = "well">
                <h3><a href = "/companies/{{$company->id}}">{{$company->name}} (ID: {{$company->id}})</a></h3>
                <p>{{$company->description}}</p>
                <hr>
            </div>
        @endforeach

    @else
        <p class = "alert alert-danger">There are no companies in the database.</p>
    @endif
@endsection