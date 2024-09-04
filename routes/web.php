<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeControllers;
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

// Route::get('/',  function () {
//     return view('welcome');
// });

// //praktikum 1 (2)
// Route::get('/hello', function () {
//     return 'Hello World';
// });

// //praktikum 1 (4)
// Route::get('/world', function () {
//     return 'World';
// });

// // //praktikum 1 (6)
// // Route::get('/ucapan', function () {
// //     return 'Selamat Datanng';
// // });

// //praktikum 1 (7)
// Route::get('/nim', function () {
//     return '2241760029';
// });

// //praktikum 1 (8)
// Route::get('/user/{Melisa}', function ($name) {
//     return 'Nama saya '.$name;
// });

// //praktikum 1 (11)
// Route::get('/posts/{post}/comments/{comment}', function
// ($postId, $commentId) {
//     return 'Pos ke-' .$postId." Komentar ke-: ".$commentId;
// });

// // //praktikum 1 (13)
// // Route::get('/articles/{id}', function ($id) {
// //     return 'Halaman Artikel dengan ID ' . $id;
// // });

// // praktikum 1 (14)
// Route::get('/user/{name?}', function ($name=null) {
//     return 'Nama saya '.$name;
// });

// //praktikum 1 (17)
// Route::get('/user/{name?}', function ($name='Nur Melisa') {
//     return 'Nama saya '.$name;
// });

// // // praktikum 2 (4)
// // Route::get('/', [WelcomeControllers :: class, 'hello'] );

// // praktikum 2 (6)
// Route::get('/', [WelcomeControllers::class, 'index']);

// // praktikkum 2 (6)
// Route::get('/about', [WelcomeControllers::class, 'about']);

// // praktikkum 2 (6)
// Route::get('/articles/{id}', [WelcomeControllers::class, 'articles']);

// // praktikum 2 (7)
// Route::get('/', [Homecontroller :: class, 'hello'] );

// // praktikum 2 (7)
// Route::get('/index', [Homecontroller :: class, 'index']);


// // praktikum 2 (7)
// Route::get('/about', [AboutController :: class, 'about']);

// // praktikkum 2 (7)
// Route::get('/articles/{id}', [AboutController::class, 'articles']);

// // praktikum 2 (7)
// Route::get('/about', [ArticleController :: class, 'about']);

// // praktikkum 2 (7)
// Route::get('/articles/{id}', [ArticleController::class, 'articles']);

// // praktikum 2 (9)
// Route::resource('photos', PhotoController::class);

// // praktikum 2 (11)
// Route::resource('photos', PhotoController::class)->only([
//     'index', 'show'
//     ]);
// Route::resource('photos', PhotoController::class)->except([
//     'create', 'store', 'update', 'destroy'
//     ]);

// // praktikum 3 (2)
// Route::get('/greeting', function () {
//     return view('blog.hello', ['name' => 'Melisa']);
//     });

// praktikum 3 (9)
Route::get('/greeting', [WelcomeControllers :: class, 'greeting']);