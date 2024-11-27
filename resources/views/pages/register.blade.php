@extends('layout.layout')
@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection
@section('content')
<div class="register-container">
    <div class="app-name">
        <img src="{{ asset('img/icon.png') }}" alt="">
        <h1>Finance System</h1>
    </div>
    <h1>Register</h1>
</div>
@endsection