<?php

use App\Http\Controllers\LinksController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Auth::routes();

Route::get('/', [LinksController::class, 'index'])->name('home');
Route::get('/links/create', [LinksController::class, 'create'])->name('links.create');
Route::post('/links/store', [LinksController::class, 'store'])->name('links.store');
Route::delete('/links/{link}', [LinksController::class, 'destroy'])->name('links.delete');
//Route::get('/links/{link_key}', [LinksController::class, 'show'])->name('links.show');

Route::resource('users', UsersController::class);