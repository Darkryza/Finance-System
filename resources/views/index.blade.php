@extends('layout.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection
@section('content')
<div class="login-container">
    <div class="app-name">
        <img src="{{ asset('img/icon.png') }}" alt="">
        <h1>Finance System</h1>
    </div>
    <div class="login-inputs">
        <form action="">
            @csrf
            <label for="username">Username</label>
            <input type="text">
            <label for="password">Password</label>
            <input type="password">
            <button type="submit">Login</button>
        </form>
    </div>
    <a href="/register" class="register-button">Register</a>
</div>
@endsection