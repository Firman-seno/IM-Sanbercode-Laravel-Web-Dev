<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Registercontroller;


Route::get('/', [Homecontroller::class, 'utama']);
Route::get('/register',[Registercontroller::class,'formdaftar' ] );
Route::post('/kirim', [Registercontroller::class,'welcome' ] );
