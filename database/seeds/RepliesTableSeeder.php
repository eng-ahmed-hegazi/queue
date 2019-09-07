<?php

use Illuminate\Database\Seeder;
use App\Reply;
use App\Discussion;
class RepliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reply1=[
            'content'       => 'Replay 1 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'user_id'       => 1 ,
            'discussion_id' => 2
        ];

        $reply2=[
            'content'       => 'Replay 2 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'user_id'       => 2 ,
            'discussion_id' => 2
        ];

        $reply3=[
            'content'       => 'Replay 3 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'user_id'       => 1 ,
            'discussion_id' => 3
        ];

        $reply4=[
            'content'       => 'Replay 4 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'user_id'       => 2 ,
            'discussion_id' => 4
        ];

        $reply5=[
            'content'       => 'Replay 5 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'user_id'       => 1 ,
            'discussion_id' => 5
        ];

        $reply6=[
            'content'       => 'Replay 6 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'user_id'       => 1 ,
            'discussion_id' => 5
        ];

        $reply7=[
            'content'       => 'Replay 7 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'user_id'       => 1 ,
            'discussion_id' => 2
        ];

        $reply8=[
            'content'       => 'Replay 8 adipisicing elit. Magni necessitatibus, eaque qui impedit alias dolorum deleniti cumque omnis nihil iure, distinctio fugit, ullam voluptate nemo obcaecati commodi quibusdam dolores! Ex?',
            'user_id'       => 2 ,
            'discussion_id' => 4
        ];
        Reply::create($reply1);
        Reply::create($reply2);
        Reply::create($reply3);
        Reply::create($reply4);
        Reply::create($reply5);
        Reply::create($reply6);
        Reply::create($reply7);
        Reply::create($reply8);


    }
}
