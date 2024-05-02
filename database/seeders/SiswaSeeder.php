<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Siswa::Insert(
            [
                'nama' => 'Farel',
                'Kelas' => 'XI RPL 2',
                'jenis_kelamin' => 0,
                'alamat'=> 'cibay'
            ]
        );
         Siswa::Insert(
            [
                'nama' => 'Fajar',
                'Kelas' => 'XI RPL 2',
                'jenis_kelamin' => 1,
                'alamat'=> 'cukaenak'
            ]
        );
    }
}
