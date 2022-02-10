<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
         \App\Models\Post::factory(1000)->create();
        /*\App\Models\Post::factory(5)->create([
            'title' => 'Post title 1',
            'body'  => 'Post body 1',
        ]);*/
    }
}
