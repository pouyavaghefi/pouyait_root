<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['nl', 'en'])) {
        session()->put('locale', $locale);
    }

    return redirect()->back();
})->name('lang.switch');
