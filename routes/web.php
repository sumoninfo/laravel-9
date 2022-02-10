<?php

use App\Enums\PostState;
use App\Models\Post;
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

//============Laravel Scout Database Engine============
Route::get('/scout', function () {
    return Post::search("deleniti")
        ->where('id', 988)
        ->paginate(10);
});

//=============Full Text Indexing====================
Route::get('/full-text', function () {
    return Post::whereFullText('body', 'body 1')->count();
});


// ==========Enum Attribute Casting==============
Route::get('/posts/{state}', function (PostState $state) {
    dd($state);
});
Route::get('/enum', function () {
//update the post set status
    /*$updatePost = Post::query()->inRandomOrder()->first();
    if ($updatePost->state == PostState::Draft) {
        return 'Post is already in draft state';
    }*/
    //$updatePost->save();

    //Save the post
    $post        = new Post();
    $post->title = 'My title';
    $post->body  = 'My Body';
    $post->state = PostState::Deleted;
    $post->save();


    dd($post->state->value);
    dd(Post::first()->state->value);
});
