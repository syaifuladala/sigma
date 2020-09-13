@extends('layout/admin')
@section('title','Insert Soal Saintek Biologi')
@section('saintek','active')

@section('content')
<a href="<?= $_GET['id_pelajaran']; ?>"><button class="button-add">Kembali ke Daftar Soal</button></a>

<form class="form" action="soal/insert" method="POST">
    @method('patch')
    @csrf

    <table width="100%">
        <tr>
            <td width="15%"><label for="nomor">Nomor</label><input type="text" name="nomor"></td>
            <td><label for="id_pelajaran">ID Pelajaran</label><input type="text" name="id_pelajaran" value="<?= $_GET['id_pelajaran']; ?>"></td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="soal">Soal</label>
                <textarea name="soal"></textarea>
                <input type="file" id="soal_gambar" name="soal_gambar">
            </td>
        </tr>
        <tr>
            <td width="15%">
                <label for="soal">Kode</label>
                <textarea name="A_id" value="A">A</textarea>
            <td>
                <label for="A_jawaban">Jawaban</label>
                <textarea name="A_jawaban"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="file" id="A_jawaban_gambar" name="A_jawaban_gambar">
            </td>
        </tr>
        <tr>
            <td width="15%">
                <label for="soal">Kode</label>
                <textarea name="B_id">B</textarea>
            <td>
                <label for="B_jawaban">Jawaban</label>
                <textarea name="B_jawaban"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="file" id="B_jawaban_gambar" name="B_jawaban_gambar">
            </td>
        </tr>
        <tr>
            <td width="15%">
                <label for="soal">Kode</label>
                <textarea name="C_id">C</textarea>
            <td>
                <label for="C_jawaban">Jawaban</label>
                <textarea name="C_jawaban"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="file" id="C_jawaban_gambar" name="C_jawaban_gambar">
            </td>
        </tr>
        <tr>
            <td width="15%">
                <label for="soal">Kode</label>
                <textarea name="D_id">D</textarea>
            <td>
                <label for="D_jawaban">Jawaban</label>
                <textarea name="D_jawaban"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="file" id="D_jawaban_gambar" name="D_jawaban_gambar">
            </td>
        </tr>
        <tr>
            <td width="15%">
                <label for="soal">Kode</label>
                <textarea name="E_id">E</textarea>
            <td>
                <label for="E_jawaban">Jawaban</label>
                <textarea name="E_jawaban"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="file" id="E_jawaban_gambar" name="E_jawaban_gambar">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="kunci_jawaban">Kunci Jawaban</label>
                <select name="kunci_jawaban" id="kunci_jawaban">
                    <option value=""></option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="E">E</option>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit" class="button-save">Simpan</button>
    <button type="reset" class="button-delete">Reset</button>
</form>
@endsection