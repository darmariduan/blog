<?php

namespace App\Models;



class Post
{
    private static $blog_posts = [
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

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        
        return $posts->firstWhere('slug', $slug);
    }
}
