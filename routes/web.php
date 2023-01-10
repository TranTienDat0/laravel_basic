<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
    return view('welcome');
});

Route::get('/user', [userController::class,'index'])->name('user');
Route::get('/newUser', [userController::class, 'create'])->name('newUser');
Route::post('/create', [userController::class, 'createPost'])->name('create');
