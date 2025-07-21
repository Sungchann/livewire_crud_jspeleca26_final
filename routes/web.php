<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;

use App\Livewire\Product\Index;
use App\Livewire\Product\Create;
use App\Livewire\Product\Edit;
use App\Livewire\Product\View;


Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', Login::class)->name('login');
Route::get('/register', Register::class)->name('register');

Route::get('/products', Index::class)->name('products');
Route::get('/product/create', Create::class);
Route::get('/product/edit/{id}', Edit::class);
Route::get('/product/view/{id}', View::class);



