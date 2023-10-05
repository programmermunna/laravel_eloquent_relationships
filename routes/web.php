<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;
use App\Models\Post;
use App\Models\Comment;
use App\Models\Category;

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

Route::get('/', function () {

    //HasOne - One to One relationships
    $phone = User::find(3);
    $phone = User::find(3)->phone;
    // return $phone;
    
    $user = Phone::find(1);
    $user = Phone::find(1)->user;
    // return $user;

    $phones = Phone::all();
    $users = User::all();
    // return $users;

    //HasMany - One to Many relationships
    $post = Post::find(1);
    $post = Post::find(1)->comment;
    // return $post;

    $comment = Comment::find(1);
    $comment = Comment::find(1)->post;
    // return $comment;

    $posts = Post::with('comments')->get();
    $comments = Comment::all();
    // return $posts;

    //ManyToMany - Many to Many relationships
    $posts = Post::with('categories')->get();
    $categories = Category::with('posts')->get();
    // return $posts;

    return view('welcome',compact('categories'));
});
