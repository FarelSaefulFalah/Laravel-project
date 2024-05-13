<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Media;
class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Media::insert([
            'film_id'=> 1,
            'media_type'=> 1,
            'media_title' => 'The Matrix ',
            'url_media'=>'https://www.youtube.com/embed/F478PvRt74Y?si=JK4LfLCJ89oLWw_Z'
        ]);
         Media::insert([
            'film_id'=> 1,
            'media_type'=>0,
            'media_title' => 'The Cyclop',
            'url_media'=>'https://tse1.mm.bing.net/th?id=OIP.Kre8_AdyK5ygXepS4gFnLQHaEo&pid=Api&P=0&h=180'
        ]);
           Media::insert([
            'film_id'=> 1,
            'media_type'=>1,
            'media_title' => 'The Eyes',
            'url_media'=>'https://www.youtube.com/embed/F478PvRt74Y?si=JK4LfLCJ89oLWw_Z'
        ]);

           Media::insert([
            'film_id'=> 1,
            'media_type'=>0,
            'media_title' => 'The Matris',
            'url_media'=>'http://www.pixelstalk.net/wp-content/uploads/2016/08/Free-Download-Spiderman-Wallpaper.jpeg'
        ]);
           Media::insert([
            'film_id'=> 1,
            'media_type'=>1,
            'media_title' => 'CNN',
            'url_media'=>'https://www.youtube.com/embed/F478PvRt74Y?si=JK4LfLCJ89oLWw_Z'
        ]);
           Media::insert([
            'film_id'=> 2,
            'media_type'=>0,
            'media_title' => 'CVG',
            'url_media'=>'https://th.bing.com/th/id/OIP.8PSSqeuirzf4j-WxNb6FQAHaFj?w=195&h=146&c=7&r=0&o=5&dpr=1.5&pid=1.7'
        ]);
           Media::insert([
            'film_id'=> 2,
            'media_type'=>1,
            'media_title' => 'VIOC',
            'url_media'=>'https://www.youtube.com/embed/F478PvRt74Y?si=JK4LfLCJ89oLWw_Z'
        ]);
           Media::insert([
            'film_id'=> 2,
            'media_type'=>0,
            'media_title' => 'The Slide',
            'url_media'=>''
        ]);
           Media::insert([
            'film_id'=> 2,
            'media_type'=>1,
            'media_title' => 'Dont Left that side',
            'url_media'=>'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_t_2'
        ]);
           Media::insert([
            'film_id'=> 2,
            'media_type'=>1,
            'media_title' => 'XX NEWs',
            'url_media'=>'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_t_2'
        ]);
           Media::insert([
            'film_id'=> 3,
            'media_type'=>0,
            'media_title' => 'Slide thst',
            'url_media'=>'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_t_2'
        ]);
           Media::insert([
            'film_id'=> 3,
            'media_type'=>1,
            'media_title' => 'News Matrix',
            'url_media'=>'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_t_2'
        ]);
           Media::insert([
            'film_id'=> 3,
            'media_type'=>0,
            'media_title' => 'Real Matrix',
            'url_media'=>'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_t_2'
        ]);
           Media::insert([
            'film_id'=> 3,
            'media_type'=>1,
            'media_title' => 'The one of Matrix',
            'url_media'=>'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_t_2'
        ]);
           Media::insert([
            'film_id'=> 3,
            'media_type'=>0,
            'media_title' => 'The Matrix by cj',
            'url_media'=>'https://www.imdb.com/title/tt0773262/?ref_=hm_stp_pvs_piv_tt_t_2'
        ]);
    }
}
