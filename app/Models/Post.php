<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use PhpParser\Node\Stmt\Static_;

class Post{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'title' => 'Judul Ark 1',
                'slug' => 'judul-ark-1',
                'author' => 'Rio Ragil Ramdani',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, sapiente. Unde vero perferendis cumque architecto a adipisci laborum, dolor cupiditate dolorem, id accusantium. Quia officiis necessitatibus repellendus mollitia, numquam ratione? Quae.'
            ],
            [
                'id' => 2,
                'title' => 'Judul Ark 2',
                'slug'=> 'judul-ark-2',
                'author' => 'Rio Ragil Ramdani',
                'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, sapiente. Unde vero perferendis cumque architecto a adipisci laborum, dolor cupiditate dolorem, id accusantium. Quia officiis necessitatibus repellendus mollitia, numquam ratione? Quae.'
            ],
        ];
    }
    public static function find($slug):array{
        // use class
        $post = Arr::first(static::all(), function ($post) use ($slug) {
            return $post['slug'] == $slug;
        });
        if(! $post){
            abort(404);
        }
        return $post;
        // use arrow function
        // return Arr::first(static::all(), fn($post) => $post['slug'] == $slug);
    }
}
