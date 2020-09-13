@extends('layout/admin')
@section('title','Saintek')
@section('saintek','active')

@section('content')
@foreach($pelajaran as $mapel)
<a href="{{ $mapel->id_pelajaran }}">
    <div class="box">
        <table width="100%">
            <tr>
                <td width="25%"><p>Tipe Ujian : {{ $mapel->id_tipe_ujian }}</p>
                    <p>ID : {{ $mapel->id_pelajaran }}</p>
                </td>
                <td width="60%"><h1>{{ $mapel->keterangan }}</h1></td>
                <td width="15%"><span><h1>></h1></span></td>
            </tr>
        </table>        
    </div>
</a>
@endforeach
@endsection
