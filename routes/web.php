<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
// Route untuk menampilkan form login
Route::get('/signin', [UserController::class, 'showSigninForm']);

// Route untuk memproses login
Route::post('/signin', [UserController::class, 'signin']);

//Signup
// Route untuk menampilkan form register
Route::get('/signup', [UserController::class, 'showSignupForm']);

// Route untuk memproses register
Route::post('/signup', [UserController::class, 'signup']);

//Home
Route::get('/', function () {
    return 'Home Page';
});

//Blog
// Route untuk Blog
Route::get('/blog', function () {
    return view('blog');
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

// Route untuk Profile
Route::get('/profile', function () {
    return view('profile');
})->middleware('authMiddle');
