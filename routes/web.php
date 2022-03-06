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

Route::get('/', \App\Http\Livewire\Home::class)->name('home');

Route::get('songs', \App\Http\Livewire\Songs::class)->name('songs');

Route::get('admin', \App\Http\Livewire\Admin\Login::class)->name('admin')->middleware('admin');
Route::group(['prefix'=>'admin', 'middleware'=>['R_admin']], function (){
    Route::get('dashboard', \App\Http\Livewire\Admin\Dashboard::class)->name('dashboard');
});
