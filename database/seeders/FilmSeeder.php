<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\film;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Film::insert([
            'Judul' => 'Spiderman',
            'Deskripsi' => 'Manusia Bala-Bala'
        ]);
        Film::insert([
            'Judul' => 'Soapman',
            'Deskripsi' => 'JERK EVERY DAY'
        ]);
        Film::insert([
            'Judul' => 'Sickman',
            'Deskripsi' => 'PENYAKITAN'
        ]);
    }
}
