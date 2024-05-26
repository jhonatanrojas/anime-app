<!-- resources/views/components/signup.blade.php -->
@extends('layouts.app')

@section('title', 'Signup')

@section('content')
    <h1>Signup</h1>
    <form action="" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br>
        <button type="submit">Signup</button>
    </form>
@endsection