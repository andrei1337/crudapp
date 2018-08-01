<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charse = "utf-8">
        <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
        <meta name = "viewport" content = "width=device-width, initial-scale=1">
        <title>{{config('app.name'), 'CRUDApp'}}</title>
        <link rel = "stylesheet" href = "{{asset('css/app.css')}}">
        <link href = "https://fonts.googleapis.com/css?family=Raleway:100,600" rel = "stylesheet" type = "text/css">
        <link href = "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin = "anonymous">
    </head>
    <body>
        @include('inc.navbar')
        <div class = "container">
            @include('inc.errormessages')
            @yield('content')
        </div>
    </body>
</html>
