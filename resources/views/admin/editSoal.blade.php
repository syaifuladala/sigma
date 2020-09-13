@extends('layout/admin')
@section('title','Edit Soal Saintek Biologi')
@section('saintek','active')

@section('content')

@foreach($show as $data)
<a href="/admin/{{$data->id_pelajaran}}"><button class="button-add">Kembali ke Daftar Soal</button></a>

<form class="form" action="/admin/soal/update" method="POST">
    @method('patch')
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <table width="100%">
        <tr>
            <td width="15%"><label for="nomor">Nomor</label><input type="text" name="nomor" value="{{$data->nomor}}"></td>
            <td><label for="id_pelajaran">ID Pelajaran</label><input type="text" name="id_pelajaran" value="{{$data->id_pelajaran}}"></td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="soal">Soal</label>
                <textarea name="soal">{{$data->soal}}</textarea>
                <input type="file" id="soal_gambar" name="soal_gambar">
            </td>
        </tr>
        <tr>
            <td width="15%">
                <label for="soal">Kode</label>
                <textarea name="A_id" value="A">A</textarea>
            <td>
                <label for="A_jawaban">Jawaban</label>
                <textarea name="A_jawaban">{{$data->A_jawaban}}</textarea>
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
                <textarea name="B_jawaban">{{$data->B_jawaban}}</textarea>
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
                <textarea name="C_jawaban">{{$data->C_jawaban}}</textarea>
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
                <textarea name="D_jawaban">{{$data->D_jawaban}}</textarea>
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
                <textarea name="E_jawaban">{{$data->E_jawaban}}</textarea>
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
                    <?php if ($data->kunci_jawaban == 'A') { ?>
                        <option value="A" <?= "selected"; ?>>A</option>
                    <?php } elseif ($data->kunci_jawaban == 'B') { ?>
                        <option value="B" <?= "selected"; ?>>B</option>
                    <?php } elseif ($data->kunci_jawaban == 'C') { ?>
                        <option value="C" <?= "selected"; ?>>C</option>
                    <?php } elseif ($data->kunci_jawaban == 'D') { ?>
                        <option value="D" <?= "selected"; ?>>D</option>
                    <?php } elseif ($data->kunci_jawaban == 'E') { ?>
                        <option value="E" <?= "selected"; ?>>E</option>
                    <?php } ?>
                </select>
            </td>
        </tr>
    </table>
    <button type="submit" class="button-save">Simpan</button>
</form>
<form action="/admin/soal/delete" method="post" class="form d-inline">
    @method('delete')
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="hidden" name="id_pelajaran" value="{{$data->id_pelajaran}}">
    <button type="submit" class="button-delete">Hapus</button>
</form>

@endforeach
@endsection