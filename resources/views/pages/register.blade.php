@extends('layout.layout')
@section('content')
<div class="register-container">
    <h1>Finance System</h1>
    <div class="register-form">
        <h2>Register</h2>
        <form action="/register" method="POST">
            @csrf
            <label for="name">Name</label>
            <input type="text" name="name">
            <label for="username">Username</label>
            <input type="username" name="username">
            <label for="email">Email</label>
            <input type="text" name="email">
            <label for="password">Password</label>
            <input type="password" name="password">
            <label for="c_password">Comfirm Password</label>
            <input type="password" name="c_password">
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection