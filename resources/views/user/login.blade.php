@extends('layout/form')
@section('title','Log in Try Out')
@section('form')
<div class="form">
    <h2>Online Try Out</h2>
    <img src="/img/stakeholder-logo.png" alt="Logo Stakeholder">
    <form class="login-form" action="/user/login" method="POST">
        @csrf
        @method('patch')
        <input type="email" placeholder="E-mail" name="email">
        <input type="text" placeholder="Token" name="token">
        <button type="submit">Masuk</button>
    </form>
    <div class="link-login">
        <p>Belum mendaftar?<a href="/daftar"> Daftar</a> disini</p>
    </div>
</div>
@endsection