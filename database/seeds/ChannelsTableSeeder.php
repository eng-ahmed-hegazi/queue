<?php

use Illuminate\Database\Seeder;
use App\Channel;

class ChannelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title1='laravel';
        $title2='angular js';
        $title3='bootstrap';
        $title4='vue js';
        $title5='react js';
        $title6='codeliguinter';

        $channel1 = [
            'title' => $title1,
            'slug'  => str_slug($title1)
        ];
        $channel2 = [
            'title'=>$title2,
            'slug'  => str_slug($title2)
        ];
        $channel3 = [
            'title'=>$title3,
            'slug'  => str_slug($title3)
        ];
        $channel4 = [
            'title'=>$title4,
            'slug'  => str_slug($title4)
        ];
        $channel5 = [
            'title'=>$title5,
            'slug'  => str_slug($title5)
        ];
        $channel6 = [
            'title'=>$title6,
            'slug'  => str_slug($title6)
        ];

        Channel::create($channel1);
        Channel::create($channel2);
        Channel::create($channel3);
        Channel::create($channel4);
        Channel::create($channel5);
        Channel::create($channel6);
    }
}
