<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Api\KategoriController;

Route::apiResource('kategori', KategoriController::class);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/show', [KategoriController::class, 'showAPIKategori']);
Route::get('/show/{kategori_id}', [KategoriController::class, 'showAPIKategoriid']);
Route::post('edit/{kategori_id}', [KategoriController::class, 'updateAPIKategori']);
Route::post('create', [KategoriController::class, 'buatAPIKategori']);
Route::delete('delete/{kategori_id}', [KategoriController::class, 'hapusAPIKategori']);