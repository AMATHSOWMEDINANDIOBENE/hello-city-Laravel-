<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles/style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/CSS/home1.css"> 
</head>
<body>
  @extends('base')
@section('title')
AMATH | Hello City
@endsection
@section('content')
<img src="{{asset('/images/amath.png')}}" alt="CV AMATH SOW">
    <h1>Amath sow le debutant en developpement</h1>
    <p><a href="{{route('home')}}">Revenir a la page d'acceuil</a></p>
@endsection  
</body>
</html>

