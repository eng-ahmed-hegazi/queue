<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name'      => 'admin',
            'password'  => bcrypt('admin'),
            'email'     => 'admin@gmail.com',
            'avatar'    => 'img\avatar\3.png'
        ]);

        App\User::create([
            'name'      => 'ahmed',
            'password'  => bcrypt('ahmed'),
            'email'     => 'ahmed@gmail.com',
            'avatar'    => 'img\avatar\3.png'
        ]);
    }
}
