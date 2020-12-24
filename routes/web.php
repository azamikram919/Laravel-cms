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
    return view('welcome');
});
Route::get('index', function () {
    return view('index');
});
Route::get('post', function () {
    return view('post');
});
Route::get('contact_us', function () {
    return view('contact_us');
});
Route::get('add_post', function () {
    return view('add_post');
});
Route::get('signup', function () {
    return view('signup');
});
Route::get('signin', function () {
    return view('signin');
});

Route::get('admin/index', function () {
    return view('admin/index');
});
Route::get('admin/posts', function () {
    return view('admin/posts');
});
Route::get('admin/add_slider', function () {
    return view('admin/add_slider');
});
Route::get('admin/add_post', function () {
    return view('admin/add_post');
});
Route::get('admin/add_user', function () {
    return view('admin/add_user');
});