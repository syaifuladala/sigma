<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pelajaran')->insert([
            [
                'urutan' => '1',
                'id_pelajaran' => 'mat',
                'keterangan' => 'Matematika',
                'id_tipe_ujian' => 'saintek'
            ],
            [
                'urutan' => '2',
                'id_pelajaran' => 'fis',
                'keterangan' => 'Fisika',
                'id_tipe_ujian' => 'saintek'
            ],
            [
                'urutan' => '3',
                'id_pelajaran' => 'kim',
                'keterangan' => 'Kimia',
                'id_tipe_ujian' => 'saintek'
            ],
            [
                'urutan' => '4',
                'id_pelajaran' => 'bio',
                'keterangan' => 'Biologi',
                'id_tipe_ujian' => 'saintek'
            ],
            [
                'urutan' => '1',
                'id_pelajaran' => 'eko',
                'keterangan' => 'Ekonomi',
                'id_tipe_ujian' => 'soshum'
            ],
            [
                'urutan' => '2',
                'id_pelajaran' => 'geo',
                'keterangan' => 'Geografi',
                'id_tipe_ujian' => 'soshum'
            ],
            [
                'urutan' => '3',
                'id_pelajaran' => 'sej',
                'keterangan' => 'Sejarah',
                'id_tipe_ujian' => 'soshum'
            ],
            [
                'urutan' => '4',
                'id_pelajaran' => 'sos',
                'keterangan' => 'Sosiologi',
                'id_tipe_ujian' => 'soshum'
            ]
        ]);
    }
}
