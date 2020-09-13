@extends('layout/admin')
@section('title','Saintek Biologi')
@section('saintek','active')

@section('content')
<a href="insertSoal?id_pelajaran=<?= $id_pelajaran; ?>"><button class="button-add">Tambah Soal</button></a>

<table class="table">
    <tr align="center">
        <th width="10%">Nomor</th>
        <th width="65%">Soal</th>
        <th width="15%">Jawaban</th>
        <th width="10%"></th>
    </tr>
    @foreach($soal as $data)
    <tr class="data-row">
        <td width="10%" align="center">{{ $data->nomor }}</td>
        <td width="75%">{{ $data->soal }}</td>
        <td width="10%" align="center">{{ $data->kunci_jawaban }}</td>
        <td width="5%" align="center"><a href="soal/edit/{{ $data->id }}">Edit</a></td>
        <!-- <td width="5%" align="center"><a href="#" class="clickModal" data-toggle="modal" data-target="#myModal" >Edit </a></td> -->
    </tr>
    @endforeach
</table>

<!-- <input id="url" type="hidden" value="{{ \Request::url() }}">

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
                    <input type="hidden" name="id" id="id">
                    <table width="100%">
                        <tr>
                            <td width="15%"><label for="nomor">Nomor</label><input type="text" name="nomor" id="nomor"></td>
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
</div> -->

<script>
    // $('.clickModal').on('click', function() {
    //     const id = $(this).data('id');
    //     $.ajax({
    //         url: "/admin/bio/" + id,
    //         type: 'get',
    //         dataType: 'json',
    //     }).done(function(response) {
    //         $("#modal-nomor").val(response.nomor);
    //         $("#modal-soal").val(response.soal);
    //         $("#kunci_jawaban").val(response.kunci_jawaban);

    //         $('#myModal').on('shown.bs.modal', function() {
    //             $('#myInput').trigger('focus');
    //         });
    //     });
    // });
</script>
@endsection
