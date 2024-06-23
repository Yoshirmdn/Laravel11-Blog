<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['title' => 'Home Page']);
});
Route::get('/about', function () {
    return view('about',['title' => 'About Page'],['name' => 'Rio Ragil Ramdani']);
});
Route::get('/blog', function () {
    return view('blog',['title' => 'Blog Page']);
});
Route::get('/contact', function () {
    return view('contact',['title' => 'Contact Page']);
});
