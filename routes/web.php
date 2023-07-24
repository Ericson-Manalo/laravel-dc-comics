<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Guest\ComicController as GuestComicController;
use App\Http\Controllers\Admin\ComicController as AdminComicController;

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

Route::get('/', [GuestComicController::class, 'home'])->name('guest.comics.home');



Route::get('admin/comics', [AdminComicController::class, 'index'])->name('admin.comics.index');
