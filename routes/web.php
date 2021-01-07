<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LinksController;
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

Auth::routes();

Route::get('/', [LinksController::class, 'index'])->name('home');
Route::get('/links/create', [LinksController::class, 'create'])->name('links.create');
Route::post('/links/store', [LinksController::class, 'store'])->name('links.store');
Route::delete('/links/{link}', [LinksController::class, 'destroy'])->name('links.delete');