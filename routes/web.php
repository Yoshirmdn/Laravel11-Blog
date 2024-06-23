<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about',['title' => 'About Page'],['name' => 'Rio Ragil Ramdani']);
});
Route::get('/posts', function () {
    return view('posts',['title' => 'Blog Page', 'posts' => 
    [
        'title' => 'Judul Ark 1',
        'author' => 'Rio Ragil Ramdani',
        'body' => 'Lorem ipsum dolor sit amet consectetur,
        adipisicing elit. Quod, 
        sapiente. Unde vero perferendis cumque architecto a 
        adipisci laborum, dolor cupiditate dolorem, id accusantium. Quia officiis necessitatibus repellendus mollitia, numquam ratione? Quae.'
    
    ],
    [
        'title' => 'Judul Ark 2',
        'author' => 'Rio Ragil Ramdani',
        'body' => 'Lorem ipsum dolor sit amet consectetur,
        adipisicing elit. Quod, 
        sapiente. Unde vero perferendis cumque architecto a 
        adipisci laborum, dolor cupiditate dolorem, id accusantium. Quia officiis necessitatibus repellendus mollitia, numquam ratione? Quae.'
    
    ],
]);
});
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact Page']);
});
