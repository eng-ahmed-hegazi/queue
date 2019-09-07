<?php

use Illuminate\Database\Seeder;
use App\Discussion;
class DiscussionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $title1='This is Introdiction to Laravel';
        $discussion1 = [
            'title'     => $title1,
            'user_id'   => 2,
            'channel_id'=> 1,
            'comments'  => 0,
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'slug'      => str_slug($title1)
        ];

        $title2='Css3 Custimaization with LESS';
        $discussion2 = [
            'title'     => $title2,
            'user_id'   => 2,
            'channel_id'=> 2,
            'comments'  => 0,
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'slug'      => str_slug($title2)
        ];

        $title3='Adding Notification To Laravel project';
        $discussion3 = [
            'title'     => $title3,
            'user_id'   => 2,
            'channel_id'=> 3,
            'comments'  => 0,
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'slug'      => str_slug($title3)
        ];

        $title4='Introdiction To bootstrap 4';
        $discussion4 = [
            'title'     => $title4,
            'user_id'   => 2,
            'channel_id'=> 4,
            'comments'  => 0,
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'slug'      => str_slug($title4)
        ];

        $title5='Angular Route & Firebase ';
        $discussion5 = [
            'title'     => $title5,
            'user_id'   => 2,
            'channel_id'=> 5,
            'comments'  => 0,
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'slug'      => str_slug($title5)
        ];

        $title6='Sass Synchronous Awsome Stylesheet';
        $discussion6 = [
            'title'     => $title6,
            'user_id'   => 2,
            'comments'  => 0,
            'channel_id'=> 4,
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'slug'      => str_slug($title6)
        ];

        $title7='Nodejs For Beginers';
        $discussion7 = [
            'title'     => $title7,
            'user_id'   => 2,
            'comments'  => 0,
            'channel_id'=> 4,
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'slug'      => str_slug($title7)
        ];

        $title8='MEAN Stack Development ';
        $discussion8 = [
            'title'     => $title8,
            'user_id'   => 2,
            'comments'  => 0,
            'channel_id'=> 4,
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'slug'      => str_slug($title8)
        ];

        Discussion::create($discussion1);
        Discussion::create($discussion2);
        Discussion::create($discussion3);
        Discussion::create($discussion4);
        Discussion::create($discussion5);
        Discussion::create($discussion6);

    }
}
