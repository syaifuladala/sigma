@extends('admin/listSoal')
@section('madeModal')

<input id="url" type="hidden" value="{{ \Request::url() }}">
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modalDialog-header">
                <h2>Edit Soal</h2>
                <a class="close" data-dismiss="modal">x</a>
            </div>
            <div class="modalDialog-content">
                <form class="form" action="bio/update" method="POST" id="edit-form">

                    @method('patch')
                    @csrf
                    <input type="text" name="id" id="id">
                    <table width="100%">
                        <tr>
                            <td width="15%"><label for="nomor">Nomor</label><input type="text" name="nomor" id="nomor" value="{{$show->id}}"></td>
                            <td><label for="id_pelajaran">ID Pelajaran</label><input type="text" name="id_pelajaran" value="bio"></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <label for="soal">Soal</label>
                                <textarea name="soal" id="soal"></textarea>
                                <input type="file" id="soal_gambar" name="soal_gambar" id="soal_gambar">
                            </td>
                        </tr>
                        <tr>
                            <td width="15%">
                                <label for="soal">Kode</label>
                                <textarea name="A_id" value="A">A</textarea>
                            <td>
                                <label for="A_jawaban">Jawaban</label>
                                <textarea name="A_jawaban" id="A_jawaban"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="file" id="A_jawaban_gambar" name="A_jawaban_gambar" id="A_jawaban_gambar">
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
            </div>
        </div>
    </div>
</div>


@endsection