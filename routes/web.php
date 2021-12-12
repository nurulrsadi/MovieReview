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
// Route::get('users/{id}', function ($id) {
    
// });

Route::get('/', function () {
    return view('Home', [
        "title" => "Home",
        "icon" => "fas fa-home",
    ]);
});
Route::get('/Film', function () {
    return view('Film', [
        "title" => "Film"
    ]);
});
Route::get('/About', function () {
    return view('About',  [
        "title" => "About"
    ]);
});
Route::get('/Show', function () {
    return view('/Movie/DetailMovie',  [
        "title" => "About"
    ]);
});