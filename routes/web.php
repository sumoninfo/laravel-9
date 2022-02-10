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
    dd(\App\Models\Post::first()->state);
    return view('welcome');
});


Route::get('/scout', function () {
    return \App\Models\Post::search("deleniti")
        ->where('id', 988)
        ->paginate(10);
});
