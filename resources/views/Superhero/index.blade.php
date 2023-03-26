<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="resources/css/app.css">
    <title>SuperHeroes</title>
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Inicio SuperHeroes</h1>

    <table>
        <thead>
            <tr>#</tr>
            <tr>Nombre Real</tr>
            <tr>Nombre Heroe</tr>
            <tr>Foto Heroe</tr>
            <tr>Adicional</tr>
        </thead>
        <tbody>
            @foreach($Superheros as $Superhero)
            <tr>
                <td>{{ $Superhero->id }}</td>
                <td>{{ $Superhero->nombre_real }}</td>
                <td>{{ $Superhero->nombre_heroe }}</td>
                <td>{{ $Superhero->foto_heroe }}</td>
                <td>{{ $Superhero->adicional }}</td>
                <td><a href="{{url('/Superhero/'.$Superhero->id.'/edit')}}">Editar</a> | 
                    <form action="{{url('/Superhero/'.$Superhero->id)}}" method="post">
                        @csrf {{method_field('DELETE')}}
                    <input type="submit" onclick="return confirm('¿Quieres borrar?')" value="Borrar">
                </form></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
</body>
</html>