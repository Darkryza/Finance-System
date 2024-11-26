@extends('layout.layout')
@section('content')
<div class="login-container">
    <div class="app-name">
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
</div>
@endsection