<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SuperHeroes</title>
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar SuperHeroes</h1>

    <form action="{{url('/Superhero')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nombre_real">Nombre Real</label>
        <input type="text" name="nombre_real" value="{{$hero->nombre_real}}" id="nombre_real">
        <br>
        <br>
        <label for="nombre_heroe">Nombre Heroe</label>
        <input type="text" name="nombre_heroe" value="{{$hero->nombre_heroe}}" id="nombre_heroe">
        <br>
        <br>
        <label for="foto_heroe">Foto Heroe</label>
        <input type="text" name="foto_heroe" value="{{$hero->foto_heroe}}" id="foto_heroe">
        <br>
        <br>
        <label for="adicional">Adicional</label>
        <input type="text" name="adicional" value="{{$hero->adicional}}" id="adicional">
        <br>
        <br>
        <input type="submit" value="Guardar datos">
    </form>

</div>
@endsection
</body>
</html>