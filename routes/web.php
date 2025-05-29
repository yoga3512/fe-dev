<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/tugas1', function () {
    return view('tugas1', [
        "title" => "tugas1",
    ]);
});

Route::get('/palindrom', function () {
    return view('palindrom');
});

Route::get('/tugas2', function () {
    return view('tugas2', [
        "title" => "tugas2",
    ]);
});

Route::get('/tugas2', [ApiController::class, 'index']);// Daftar surah
Route::get('/tugas2/{number}', [ApiController::class, 'detail']); // Detail ayat


