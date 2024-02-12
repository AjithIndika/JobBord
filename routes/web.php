<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Category\MainCategory;
use App\Livewire\Category\NewCategory;
use App\Livewire\Template\Template;




Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard',Template::class);
Route::get('/main-category',MainCategory::class);
Route::get('/new-category',NewCategory::class);

Route::get('/my', function () {
    return view('livewire');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
