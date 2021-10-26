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
    return view('home');
})->name('home');

Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// Route::prefix('comics')->group(function () {
//     Route::get('/comics', function () {
//         return view('comics.index',['cards' => config('comics')]);
// })->name('comics');

Route::get('/comics', function () {
    return view('comics.index',['cards' => config('comics')]);
})->name('comics');

Route::get('/comics/show{num}', function ($id) {
    $comics = config('comics');
    return view('comics.show',['comic' => $comics[$id]]);
})->name('comics.show');

Route::get('/movies', function () {
    return view('movies');
})->name('movies');

