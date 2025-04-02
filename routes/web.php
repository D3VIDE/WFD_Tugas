<?php

use App\Http\Controllers\RessourceController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

Route::get('/', function () {
    return redirect()->route('promotions.index');
});

Route::resource('promotions', RessourceController::class);
Route::get('promotions/show/{id}', [RessourceController::class, 'show'])->name('promotions.show');