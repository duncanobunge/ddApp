<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ddApp</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css"  href="{{url('css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{url('css/style.css')}}">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="main.css">-->
    <script type="text/javascript" src="{{url('js/jquery-3.4.1.js')}}"></script>
    <script type="text/javascript" src="{{url('js/bootstrap.js')}}"></script>
    <!--<script type="text/javascript" src="main.js"></script>-->
</head>
<body>
<div class="navbar-header">
  <a class="navbar-brand" href="{{ url('/') }}">DiseaseDiagnosticApp</a>
</div>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
    <ul class="nav navbar-nav">
    <li><a href="{{ url('/create') }}">Get Diagnosed</a></li>
    <li><a href="{{ url('/diagnosis') }}">View Diagnosis</a></li>
    </ul>
</div>
