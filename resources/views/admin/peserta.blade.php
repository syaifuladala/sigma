@extends('layout/admin')
@section('title','Daftar Peserta')
@section('peserta','active')

@section('content')
<table class="table">
    <tr>
        <th width="5%">No</th>
        <th width="30%">Email</th>
        <th width="30%">Nama Lengkap</th>
        <th width="20%">Asal Sekolah</th>
        <th width="5%">Tipe Ujian</th>
        <th width="5%">Status</th>
        <th width="5%"></th>
    </tr>
    @foreach($peserta as $data)
    <tr>
        <td align="center">{{ $loop->iteration }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->nama }}</td>
        <td>{{ $data->sekolah }}</td>
        <td align="center">{{ $data->id_tipe_ujian }}</td>
        <td align="center">{{ $data->status }}</td>
        <td align="center">
            <a href="#" class="clickModal" data-toggle="modal" data-target="#myModal" data-id="{{ $data->id }}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>

<!-- Passing BASE URL to AJAX -->
<input id="url" type="hidden" value="{{ \Request::url() }}">
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modalDialog-header">
                <h2>Edit Peserta</h2>
                <a class="close" data-dismiss="modal">x</a>
            </div>

            <div class="modalDialog-content">
                <form class="form" action="peserta/update" method="POST">
                    @method('patch')
                    @csrf
                    <input type="hidden" name="id" id="id_edit">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama">
                    <label for="sekolah">Asal Sekolah</label>
                    <input type="text" name="sekolah" id="sekolah">
                    <label for="id_tipe_ujian">Tipe Ujian</label>
                    <select name="id_tipe_ujian" id="id_tipe_ujian">
                        <option value="saintek">Sains dan Teknologi</option>
                        <option value="soshum">Sosial dan Humaniora</option>
                    </select>
                    <label for="status">Status</label>
                    <select name="status" id="status">
                        <option value="0">0</option>
                        <option value="1">1</option>
                    </select>
                    <button type="submit" class="button-save">Simpan</button>
                </form>
                <form action="peserta/delete" method="post" class="form d-inline">
                    @method('delete')
                    @csrf
                    <input type="hidden" name="id" id="id_delete">
                    <button type="submit" class="button-delete">Hapus</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
    $('.clickModal').on('click', function() {
        const id = $(this).data('id');
        $.ajax({
            url: "/admin/peserta/" + id,
            type: 'get',
            dataType: 'json',
            cache: false,
        }).done(function(response) {
            $("#email").val(response.email);
            $("#nama").val(response.nama);
            $("#sekolah").val(response.sekolah);
            $("#id_tipe_ujian").val(response.id_tipe_ujian);
            $("#status").val(response.status);
            $("#id_edit").val(response.id);
            $("#id_delete").val(response.id);

            $('#myModal').on('shown.bs.modal', function() {
                $('#myInput').trigger('focus');
            });
        });
    });
</script>
@endsection