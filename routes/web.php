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

Route::get('/', function () {
    return view('welcome');
});

Route::get('profile/{name}', function($name){
    return view('profile/'.strtolower($name), ["name"=>strtolower($name)]);
});

Route::get('/prize/{num}', function($num){
    return view('prize', ["num"=> $num]);
});