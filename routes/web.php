<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


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

// Route::get('/', function () {
//     echo "Hi! Selamat Datang di Website Laravel";
// });

// Route::get('/about', function () {
//     echo ("Nim   : 2041720223 <br>"); 
//     echo ("Nama  : Rahma Nurwakhidatul Hasanah <br>"); 
//     echo ("Kelas : TI-2G");
// });

// Route::get('/article/{id}', function ($id= '1') {
//     echo ("Ini adalah Halaman Artikel dengan ID " .$id);
// });

// Route::get('/article/{id}', function ($id= '2') {
//     echo ("Ini adalah Halaman Artikel dengan ID ".$id);
// });

Route::get('/', [PageController::class, 'index']);
Route::get('/about', [PageController::class, 'about']);
Route::get('/articles/{id}', [PageController::class, 'articles']);




