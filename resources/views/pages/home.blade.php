@extends('base')
@section('title')
Hello City
@endsection
@section('content')
    <h1>Bienvenue a Medina ndiobene</h1>
    <h2>HEURE DE Dakar:{{ date('h:i A') }}</h2>
@endsection
