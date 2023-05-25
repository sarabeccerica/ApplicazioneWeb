<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPubblico;
use App\Http\Controllers\ControllerUtente;
use App\Http\Controllers\ControllerFaq;
use App\Http\Controllers\ControllerStaff;

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
Route::get('/', function (){
    return view('home');
});

Route::get('/aziende', [ControllerPubblico::class, 'showAziende'])
        ->name('aziende');

Route::get('/offerte', [ControllerPubblico::class, 'showOfferte'])
        ->name('offerte');

Route::get('/aziende/{idAzienda}', [ControllerPubblico::class, 'showDettaglioAzienda'])
        ->name('offerteAzienda');

Route::get('/offerte/{idOfferta}', [ControllerPubblico::class, 'showDettaglioOfferta'])
        ->name('dettaglioOfferta');

Route::get('/FAQ', [ControllerFaq::class, 'showFAQ'])
        ->name('FAQ');

Route::view('/nuovafaq', 'newFAQ')
        ->name('nuovafaq');

Route::post('/nuovafaq', [ControllerFaq::class, 'storeFaq'])
        ->name('nuovafaq.store');

Route::get('/account', [ControllerUtente::class, 'showAllAccount'])
        ->name('account');

Route::get('/account/{idUtente}', [ControllerUtente::class, 'showAccount'])
        ->name('accountUtente');

Route::get('/account/{idUtente}/modificaAccount', [ControllerUtente::class, 'updateAccount'])
        ->name('modificaAccount');

Route::post('/account/{idUtente}/modificaAccount', [ControllerUtente::class, 'storeAccount'])
        ->name('modificaAccount.store');

Route::get('/modificaOfferta', [ControllerStaff::class, 'showAllOfferte'])
        ->name('visualizzaOfferte');

Route::get('/modificaOfferta/{idOfferta}', [ControllerStaff::class, 'updateOfferta'])
        ->name('modificaOfferta');

Route::post('/modificaOfferta/{idOfferta}', [ControllerStaff::class, 'storeOffertaModificata'])
        ->name('modificaOfferta.store');

Route::post('/aggiungiOfferta', [ControllerStaff::class,'storeOfferta'])
        ->name('aggiungiOfferta.store');

Route::get('/aggiungiOfferta',[ControllerStaff::class,'aggiungiOfferta'])
        ->name('aggiungiOfferta');

Route::get('/Coupon/{idOfferta}', [ControllerUtente::class, 'showCoupon'])
        ->name('Coupon');

Route::view('/home', 'home')
        ->name('home');
Route::view('/coupon', 'coupon')
        ->name('coupon');

Route::view('/homepage', 'homepagePublic')
        ->name('homepagePublic');


Route::view('/registrati', 'registrati')
        ->name('registrati');


/*  Rotte aggiunte da Breeze

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

*/
require __DIR__.'/auth.php';
