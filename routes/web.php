<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FormulesController;
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

/* Route::get('/', function () {
    return view('welcome');
}); */


Route::get('/', [HomeController::class, 'index'])->name("home");
//Route::get('/formule/{name}', [HomeController::class, 'index']);
Route::get('/formule/{formule}',[HomeController::class, 'formule'])->name('formule');
Route::post('/purchase',[FormulesController::class, 'purchase'])->name('purchase');

Route::get('success/{token?}',[FormulesController::class, 'successPayment'])->name('success_payment');
Route::get('cancel/{token?}',[FormulesController::class, 'cancelPayment'])->name('cancel_payment');
/* Route::get('/', function(){
    return "Put it there Smith";
}); */
