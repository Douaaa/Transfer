<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $locale = Cookie::get('locale');
    if (isset($locale) && $locale != Null && array_key_exists($locale, config('app.locales'))) {
        App::setLocale($locale);

        return redirect("/" . $locale);
    } else {
        App::setLocale(config('app.fallback_locale'));
        Cookie::queue('locale', App::getLocale());

        return redirect("/" . config('app.fallback_locale'));
    }
});
    Route::get('/', [HomeController::class,'index'])->name('Index');
