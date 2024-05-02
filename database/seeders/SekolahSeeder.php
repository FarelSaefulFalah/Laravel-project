<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sekolah;
class SekolahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sekolah::Insert(
            [
                'Nama' => 'SMK ASSALAAM BANDUNG',
                'alamat' => 'TARATE',
                'email' => 'SMKASSALAAM@sch.id',
                'tlp'=> '6287676',
                'status'=> 1,

            ]
        );
         Sekolah::Insert(
            [
                'Nama' => 'SMK FERMENTASI',
                'alamat' => 'KOPO',
                'email' => 'SMKFERMEN@sch.id',
                'tlp'=> '6287677',
                'status'=> 1,

            ]
        );
         Sekolah::Insert(
            [
                'Nama' => 'SMKN 1 BANDUNG',
                'alamat' => 'WATSUKENCANA',
                'email' => 'SMK1BANDUNG@sch.id',
                'tlp'=> '62876767',
                'status'=> 1,

            ]
        );
          Sekolah::Insert(
            [
                'Nama' => 'SMK MEDIKACOM',
                'alamat' => 'BANKOT',
                'email' => 'SMKMEDKOM@sch.id',
                'tlp'=> '62876777',
                'status'=> 1,

            ]
        );
         Sekolah::Insert(
            [
                'Nama' => 'SMKN 13 BANDUNG',
                'alamat' => 'SOEKARNO HATTA',
                'email' => 'SMKN13BANDUNG@sch.id',
                'tlp'=> '62876664',
                'status'=> 1,

            ]
        );
         Sekolah::Insert(
            [
                'Nama' => 'SMKN 3 BANDUNG',
                'alamat' => 'SOLONTONGAN',
                'email' => 'SMKN3BANDUNG@sch.id',
                'tlp'=> '62876112',
                'status'=> 1,

            ]
        );
         Sekolah::Insert(
            [
                'Nama' => 'SMKN 9 BANDUNG',
                'alamat' => 'SOEKARNO HATTA',
                'email' => 'SMKN9BANDUNG@sch.id',
                'tlp'=> '628767787',
                'status'=> 1,

            ]
        );
          Sekolah::Insert(
            [
                'Nama' => 'SMK 1 CIMAHI',
                'alamat' => 'CIMAHI',
                'email' => 'SMK1CIMAHI@sch.id',
                'tlp'=> '628767639',
                'status'=> 1,

            ]
        );
          Sekolah::Insert(
            [
                'Nama' => 'SMKN 14 BANDUNG',
                'alamat' => 'CIJAWURA',
                'email' => 'SMKN14BANDUNG@sch.id',
                'tlp'=> '628767689',
                'status'=> 1,

            ]
        );
          Sekolah::Insert(
            [
                'Nama' => 'SMKN TELKOM BANDUNG',
                'alamat' => 'PALASARI',
                'email' => 'SMKNTELKOMBANDUNG@sch.id',
                'tlp'=> '628767689',
                'status'=> 1,

            ]
        );
    }
}
