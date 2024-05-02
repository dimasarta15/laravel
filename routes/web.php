<?php

use App\Http\Controllers\mahasiswaController;
use App\Http\Livewire\CreatePost;
use Illuminate\Support\Facades\Route;
use App\Livewire\ShowPost;

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
    return view('komponen');
});

route::get('/buat', CreatePost::class);
route::get('/getmsg',[mahasiswaController::class,'pesan']);
Route::resource('mahasiswa', mahasiswaController::class);


