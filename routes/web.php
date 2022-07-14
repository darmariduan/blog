<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Darma Riduan',
        'email' => 'dharmarhiduwhan@gmail.com',
        'image' => 'github.png'
    ]);
});



Route::get('/blog', function () {
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Darma',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure id doloribus nisi quia eius. Optio, eos architecto. Animi dignissimos modi eius quam reiciendis officiis impedit iusto possimus tempore dolore fuga voluptas expedita architecto necessitatibus veniam vel, dolorum vitae illo. Nesciunt, consequuntur obcaecati nostrum deserunt ea eveniet accusantium! Tenetur consequatur et cumque nam qui ratione, sapiente repudiandae quia, numquam magnam pariatur commodi aliquid quos blanditiis autem? Assumenda dicta deleniti repellat autem.',
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Darma',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure id doloribus nisi quia eius. Optio, eos architecto. Animi dignissimos modi eius quam reiciendis officiis impedit iusto possimus tempore dolore fuga voluptas expedita architecto necessitatibus veniam vel, dolorum vitae illo. Nesciunt, consequuntur obcaecati nostrum deserunt ea eveniet accusantium! Tenetur consequatur et cumque nam qui ratione, sapiente repudiandae quia, numquam magnam pariatur commodi aliquid quos blanditiis autem? Assumenda dicta deleniti repellat autem.',
        ],
        [
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'author' => 'Darma',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure id doloribus nisi quia eius. Optio, eos architecto. Animi dignissimos modi eius quam reiciendis officiis impedit iusto possimus tempore dolore fuga voluptas expedita architecto necessitatibus veniam vel, dolorum vitae illo. Nesciunt, consequuntur obcaecati nostrum deserunt ea eveniet accusantium! Tenetur consequatur et cumque nam qui ratione, sapiente repudiandae quia, numquam magnam pariatur commodi aliquid quos blanditiis autem? Assumenda dicta deleniti repellat autem.',
        ],

    ];
    
    return view('posts', [
        'title' => 'Posts',
        'posts' => $blog_posts
    ]);
});

//halaman single posts
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'author' => 'Darma',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure id doloribus nisi quia eius. Optio, eos architecto. Animi dignissimos modi eius quam reiciendis officiis impedit iusto possimus tempore dolore fuga voluptas expedita architecto necessitatibus veniam vel, dolorum vitae illo. Nesciunt, consequuntur obcaecati nostrum deserunt ea eveniet accusantium! Tenetur consequatur et cumque nam qui ratione, sapiente repudiandae quia, numquam magnam pariatur commodi aliquid quos blanditiis autem? Assumenda dicta deleniti repellat autem.',
        ],
        [
            'title' => 'Judul Kedua',
            'slug' => 'judul-kedua',
            'author' => 'Darma',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure id doloribus nisi quia eius. Optio, eos architecto. Animi dignissimos modi eius quam reiciendis officiis impedit iusto possimus tempore dolore fuga voluptas expedita architecto necessitatibus veniam vel, dolorum vitae illo. Nesciunt, consequuntur obcaecati nostrum deserunt ea eveniet accusantium! Tenetur consequatur et cumque nam qui ratione, sapiente repudiandae quia, numquam magnam pariatur commodi aliquid quos blanditiis autem? Assumenda dicta deleniti repellat autem.',
        ],
        [
            'title' => 'Judul Ketiga',
            'slug' => 'judul-ketiga',
            'author' => 'Darma',
            'body' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Iure id doloribus nisi quia eius. Optio, eos architecto. Animi dignissimos modi eius quam reiciendis officiis impedit iusto possimus tempore dolore fuga voluptas expedita architecto necessitatibus veniam vel, dolorum vitae illo. Nesciunt, consequuntur obcaecati nostrum deserunt ea eveniet accusantium! Tenetur consequatur et cumque nam qui ratione, sapiente repudiandae quia, numquam magnam pariatur commodi aliquid quos blanditiis autem? Assumenda dicta deleniti repellat autem.',
        ],

    ];

    foreach($blog_posts as $post){
        if($post['slug'] === $slug){
            $new_post = $post;
        }
    }
    return view('post',[
        'title' => 'Single Post',
        'post' => $new_post
    ]);
});
