<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Signin
Route::get('/signin', function () {
    return 'Signin Form Page';
});
Route::post('/signin', function () {
    return 'Processing Signin Data';
});

//Signup
Route::get('/signup', function () {
    return 'Signup Form Page';
});
Route::post('/signup', function () {
    return 'Processing Signup Data';
});

//Home
Route::get('/', function () {
    return 'Home Page';
});

//Blog
Route::get('/blog', function () {
    return 'Blog Articles List Page';
});
//Route dengan parameter dan query
Route::get('/blog/{blogId}', function ($blogId) {
    
    $title = request()->query('title', 'Manchester United');
    $content = request()->query('content', 'Glory Glory Man United');

    return "Blog ID: $blogId, Title: $title, Content: $content";
});

// Category
Route::get('/category/{slug}', function ($slug) {
    return "Category Articles Page for: $slug";
});

//Author
Route::get('/author/{username}', function ($username) {
    return "Articles by Author: $username";
});

//Privacy Policy
Route::get('/privacy-policy', function () {
    return 'Privacy Policy Page';
});
