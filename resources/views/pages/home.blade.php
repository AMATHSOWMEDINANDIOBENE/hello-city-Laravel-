<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles/style.css" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="/CSS/home.css"> 
</head>
<body>
@extends('base')
@section('title')
Hello City
@endsection
@section('content')
<img src="{{('/images/senegal.png')}}" alt="Drapeau Senegal">
    <h1>Bienvenue a Medina ndiobene</h1>
    <h2>HEURE DE Dakar:{{ date('h:i A') }}</h2>
@endsection
</body>
</html>
