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

//praktikum 1 (2)
Route::get('/hello', function () {
    return 'Hello World';
});

//praktikum 1 (4)
Route::get('/world', function () {
    return 'World';
});

//praktikum 1 (6)
Route::get('/ucapan', function () {
    return 'Selamat Datanng';
});

//praktikum 1 (7)
Route::get('/nim', function () {
    return '2241760029';
});

//praktikum 1 (8)
Route::get('/user/{Melisa}', function ($name) {
    return 'Nama saya '.$name;
});

//praktikum 1 (11)
Route::get('/posts/{post}/comments/{comment}', function
($postId, $commentId) {
    return 'Pos ke-' .$postId." Komentar ke-: ".$commentId;
});

//praktikum 1 (13)
Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID ' . $id;
});

// praktikum 1 (14)
Route::get('/user/{name?}', function ($name=null) {
    return 'Nama saya '.$name;
});

//praktikum 1 (17)
Route::get('/user/{name?}', function ($name='Nur Melisa') {
    return 'Nama saya '.$name;
});

