<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Tipe_ujianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipe_ujian')->insert([
            [
                'id_tipe_ujian' => 'saintek',
                'keterangan' => 'Sains dan Teknologi'
            ],
            [
                'id_tipe_ujian' => 'soshum',
                'keterangan' => 'Sosial dan Humaniora'
            ]
        ]);
    }
}
