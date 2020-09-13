<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $fillable = ['nomor','id_pelajaran','soal','soal_gambar',
                'A_id','A_jawaban','A_jawaban_gambar',
                'B_id','B_jawaban','B_jawaban_gambar',
                'C_id','C_jawaban','C_jawaban_gambar',
                'D_id','D_jawaban','D_jawaban_gambar',
                'E_id','E_jawaban','E_jawaban_gambar',
                'kunci_jawaban'
            ];
    protected $table = 'Soal';
}
