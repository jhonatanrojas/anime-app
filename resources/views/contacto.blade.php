@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <h1>Contacto</h1>
    <form action="" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <button type="submit">Enviar</button>
    </form>
@endsection