<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('lang/{locale}', function ($locale) {
    if (!in_array($locale, ['uz', 'ru', 'en'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');



Route::get('/', [HomeController::class, 'index']);