@extends('layout/form')
@section('title','Log in Admin')
@section('form')
<div class="form">
    <h2>Login Admin</h2>
    <img src="/img/stakeholder-logo.png" alt="Logo Sigma">
    <form class="login-form" action="/admin/login" method="POST">
        @csrf
        @method('patch')
        <input type="text" placeholder="Username" name="username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit">Masuk</button>
    </form>
</div>
@endsection