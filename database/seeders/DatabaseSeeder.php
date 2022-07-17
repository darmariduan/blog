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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Darma Riduan',
            'email' => 'freehost@gmail.com',
            'password' =>bcrypt('password')
        ]);

        User::create([
            'name' => 'Sativa',
            'email' => 'sativa@gmail.com',
            'password' =>bcrypt('password')
        ]);

        Category::create([
            'name' => 'Web',
            'slug' => 'web'
        ]);

        Category::create([
            'name' => 'Network',
            'slug' => 'network'
        ]);


        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus corrupti odio quas voluptatem aliquam adipisci nemo quidem necessitatibus',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus corrupti odio quas voluptatem aliquam adipisci nemo quidem necessitatibus. Sit autem quaerat dicta distinctio molestiae quod a optio necessitatibus nostrum mollitia harum pariatur cupiditate esse, perspiciatis sapiente sunt officia delectus velit excepturi laborum voluptatum! Iure iste voluptas rerum eum illum eius!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus corrupti odio quas voluptatem aliquam adipisci nemo quidem necessitatibus. Sit autem quaerat dicta distinctio molestiae quod a optio necessitatibus nostrum mollitia harum pariatur cupiditate esse, perspiciatis sapiente sunt officia delectus velit excepturi laborum voluptatum! Iure iste voluptas rerum eum illum eius!</p>',
            'category_id' => 1,
            'user_id' => 1
        ]);

        Post::create([
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'excerpt' =>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus corrupti odio quas voluptatem aliquam adipisci nemo quidem necessitatibus',
            'body' => '<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus corrupti odio quas voluptatem aliquam adipisci nemo quidem necessitatibus. Sit autem quaerat dicta distinctio molestiae quod a optio necessitatibus nostrum mollitia harum pariatur cupiditate esse, perspiciatis sapiente sunt officia delectus velit excepturi laborum voluptatum! Iure iste voluptas rerum eum illum eius!</p><p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus corrupti odio quas voluptatem aliquam adipisci nemo quidem necessitatibus. Sit autem quaerat dicta distinctio molestiae quod a optio necessitatibus nostrum mollitia harum pariatur cupiditate esse, perspiciatis sapiente sunt officia delectus velit excepturi laborum voluptatum! Iure iste voluptas rerum eum illum eius!</p>',
            'category_id' => 2,
            'user_id' => 2
        ]);



    }
}
