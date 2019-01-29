<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<title>Ephaphatha</title>
</head>
<body>
<?php

     $active = 'active';

?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    {{--brand--}}
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <h3><a class="navbar-brand" href="#">kings Blog</a></h3>
    </nav>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <h4><a class="nav-link {{'$active'}}" href="{{'/'}}">Home</a></h4>
        </li>
        {{--spacing--}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
            <h4><a class="nav-link {{'$active'}}" href="#">Press</a></h4>
        </li>
        {{--spacing--}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
            <h4><a class="nav-link {{'$active'}}" href="#">New Features</a></h4>
        </li>
        {{--spacing--}}
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <li class="nav-item">
            <h4><a class="nav-link {{'$active'}}" href="#">New Hires</a></h4>
        </li>
    </ul>
    <div class="dropdown">
        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
            view Archive
        </button>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Link 1</a>
            <a class="dropdown-item" href="#">Link 2</a>
            <a class="dropdown-item" href="#">Link 3</a>
        </div>
    </div>

    <ul class="navbar-nav ml-auto">
        <li><a href="{{'/'}}"><i class="fa fa-user"></i> Sign Up</a></li>&nbsp;&nbsp;&nbsp;
        <li><a href="logon"><span class="fa fa-sign-in"></span> Login</a></li>
    </ul>

</nav>
@yield('content')