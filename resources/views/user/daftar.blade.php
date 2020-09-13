@extends('layout/form')
@section('title','Daftar Try Out')
@section('form')
<div class="form">
    <h2>Online Try Out</h2>
    <img src="/img/stakeholder-logo.png" alt="Logo Stakeholder">
    <form class="login-form" action="/daftar/output" method="POST">
        @csrf
        @method('patch')
        <input type="email" placeholder="E-mail" name="email">
        <input type="text" placeholder="Nama Lengkap" name="nama">
        <input type="text" placeholder="Asal Sekolah" name="sekolah">
        <select name="id_tipe_ujian">
            <option selected>-Pilih Kelompok Ujian-</option>
            <option value="saintek">Sains dan Teknologi</option>
            <option value="soshum">Sosial dan Humaniora</option>
        </select>
        <input type="hidden" name="status" value="0">
        <button type="submit">Daftar</button>
    </form>
</div>
@endsection