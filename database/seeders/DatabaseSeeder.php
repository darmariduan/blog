<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Darma Riduan',
            'username' => 'darmariduan',
            'email' => 'dharmarhiduwhan@gmail.com',
            'password' => bcrypt('password')
        ]);


        User::factory(3)->create();
        // \App\Models\User::factory(10)->create();

        Category::create([
            'name' => 'Web',
            'slug' => 'web'
        ]);
        Category::create([
            'name' => 'Cloud',
            'slug' => 'cloud'
        ]);

        Category::create([
            'name' => 'Network',
            'slug' => 'network'
        ]);

        Post::factory(20)->create();

    }
}
