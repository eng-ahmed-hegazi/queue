<?php

use Illuminate\Database\Seeder;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\Admin::create([
            'name'      => 'Ahmed',
            'email'     => 'ahmed@gmail.com',
            'avatar'    => 'img\avatar\3.png',
            'password'  => bcrypt('ahmed@gmail.com'),
            'about'  =>   'im admin'
        ]);
    }
}
