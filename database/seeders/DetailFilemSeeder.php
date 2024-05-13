<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\DetailFilem;
class DetailFilemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DetailFilem::insert([
            'film_id' => 1,
            'code_film' => 'tt13186481',
            'url_imdb' => 'https://www.imdb.com/title/tt13186482/?ref_=vp_vi_tt'
        ]);
         DetailFilem::insert([
            'film_id' => 2,
            'code_film' => 'tt32188442',
            'url_imdb' => 'https://www.imdb.com/title/tt32188448/?ref_=vp_vi_tt'
        ]);
        DetailFilem::insert([
            'film_id' => 3,
            'code_film' => 'tt27883163',
            'url_imdb' => 'https://www.imdb.com/title/tt2788316/?ref_=hm_top_tt_t_3'
        ]);
    }
}
