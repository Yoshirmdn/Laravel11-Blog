<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page', 'name' => 'Rio Ragil Ramdani']);
});

Route::get('/posts', function () {
    $posts = [
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

    return view('posts', [
        'title' => 'Blog Page',
        'posts' => $posts
    ]);
});

Route::get('/posts/{slug}', function($slug) {
    $posts = [
        [
            'id' => 1,
            'slug'=> 'judul-ark-1',
            'title' => 'Judul Ark 1',
            'author' => 'Rio Ragil Ramdani',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, sapiente. Unde vero perferendis cumque architecto a adipisci laborum, dolor cupiditate dolorem, id accusantium. Quia officiis necessitatibus repellendus mollitia, numquam ratione? Quae.'
        ],
        [
            'id' => 2,
            'slug'=> 'judul-ark-2',
            'title' => 'Judul Ark 2',
            'author' => 'Rio Ragil Ramdani',
            'body' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quod, sapiente. Unde vero perferendis cumque architecto a adipisci laborum, dolor cupiditate dolorem, id accusantium. Quia officiis necessitatibus repellendus mollitia, numquam ratione? Quae.'
        ],
    ];

    $post = Arr::first($posts, function($post) use ($slug) {
        return $post['slug'] == $slug;
    });

    if (!$post) {
        abort(404, 'Post not found');
    }

    return view('post', ['title' => 'Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});
