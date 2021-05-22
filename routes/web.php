<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PanelController;

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

Route::get('', [HomeController::class, 'home']);

Route::get('{lang}', function ($lang) {
    $kontrol = ['tr', 'en', 'ae', 'es', 'fr', 'gr', 'ru'];
    if (in_array($lang, $kontrol)) {
        App::setLocale($lang);
        return view('anasayfa');
    }
    else {
        return abort(404,'Sayfa Bulunamadı!');
    }
});

Route::get('{lang}/kayit', [PanelController::class, 'registerPage'])->name('panel.kayit');
Route::post('register', [PanelController::class, 'register'])->name('panel.register');

Route::get('{lang}/giris', [PanelController::class, 'loginPage'])->name('panel.giris');
Route::post('login', [PanelController::class, 'login'])->name('panel.login');

Route::post('logout', [PanelController::class, 'logout'])->name('panel.logout');

Route::get('{lang}/panel', [PanelController::class, 'panelPage'])->middleware('auth')->name('panel.home');
Route::get('{lang}/panel/kyc', [PanelController::class, 'kycPage'])->middleware('auth')->name('panel.kyc');
Route::get('{lang}/panel/kyc/yeni', [PanelController::class, 'kycCreate'])->middleware('auth')->name('panel.kyccreate');
