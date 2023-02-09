<?php

use App\Http\Controllers\CMS\MahasiswaController;
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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [MahasiswaController::class, 'index']);
Route::post('/store', [MahasiswaController::class, 'store'])->name('tambahData.mahasiswa');
