<?php

use App\Http\Controllers\FotoController;
use App\Http\Controllers\KategoriFotoController;
use App\Http\Controllers\FotograferController;
use App\Http\Controllers\HomeController;
use Doctrine\DBAL\Schema\Index;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'Index']);

Route::resource('foto', FotoController::class,);
Route::resource('kategori_foto', KategoriFotoController::class,);
Route::resource('fotografer', FotograferController::class,);


