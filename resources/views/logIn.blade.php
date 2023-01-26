@extends('layout')
@section('content')

@section('title','welcome admin')

<body>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email</label>
        <input id="email" type="email" name="email" required>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
        <button type="submit">Login</button>
    </form>

@endsection