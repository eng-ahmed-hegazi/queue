<?php

use Illuminate\Database\Seeder;
use App\Tag;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create([
		'tag' => 'Laravel'
		]);
        Tag::create([
		'tag' => 'Php'
		]);
        Tag::create([
		'tag' => 'Framwork'
		]);
        Tag::create([
		'tag' => 'Angular'
		]);
        Tag::create([
		'tag' => 'Javascript'
		]);
        Tag::create([
		'tag' => 'VueJs'
		]);
		Tag::create([
		'tag' => 'ReactJS'
		]);
		Tag::create([
		'tag' => 'Codeginter'
		]);
		Tag::create([
		'tag' => 'Ionic'
		]);
		Tag::create([
		'tag' => 'Cerdova'
		]);
		Tag::create([
		'tag' => 'Semantics'
		]);
		Tag::create([
		'tag' => 'Design'
		]);
	
    }
}
