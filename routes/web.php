<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PromotionController;

Route::get('/', function () {
    return redirect()->route('promotions.index');
});

Route::resource('promotions', PromotionController::class);