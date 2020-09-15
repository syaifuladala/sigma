<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peserta extends Model
{
    protected $fillable = ['email','token','nama','sekolah','id_tipe_ujian','status'];
    protected $table = 'peserta';
}
