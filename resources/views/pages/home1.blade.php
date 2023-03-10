@extends('base')
@section('title')
AMATH | Hello City
@endsection
@section('content')
<img src="{{asset('/images/amath.png')}}" alt="CV AMATH SOW">
    <h1 class="text-lg text-gray-800">Amath sow le debutant en developpement</h1>
    <p><a href="{{route('home')}}">Revenir a la page d'acceuil</a></p>
@endsection
