<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Phone;

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
    $phone = User::find(3);
    $phone = User::find(3)->phone;
    // return $phone;
    
    $user = Phone::find(1);
    $user = Phone::find(1)->user;
    // return $user;

    $phones = Phone::all();
    $users = User::all();
    // return $users;

    return view('welcome',compact('users'));
});
