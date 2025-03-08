<?php

use App\Http\Controllers\Tugas\ControllerProduk;

Route::prefix('dashboard')->group(function () {
    
    Route::get('/', [ControllerProduk::class, 'index']);  
    
    Route::get('/{id}', [ControllerProduk::class, 'show']);  

    Route::post('/produk', [ControllerProduk::class, 'store']);  
});