<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Press+Start+2P&family=Raleway:wght@300;400;700&display=swap" rel="stylesheet"> 

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- My css -->
    <link rel="stylesheet" href="/css/app.css">

    <style>
       font-family: 'Raleway', sans-serif; 
    </style>
</head>

<body>

<nav class="navbar navbar-light bg-dark">
    <div class="container">
        <a href="/"><span class="navbar-brand mb-0 h1 text-white">Todo</span></a> 
    </div>
</nav>

<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">

            {{ session()->get('success') }}

        </div>
    @endif

    @yield('content')

</div>


</body>

</html>
