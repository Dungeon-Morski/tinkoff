<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\QuotesController;
use App\Http\Controllers\RefillBalanceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SupportController;
use App\Http\Controllers\WithdrawBalanceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/register', [RegisterController::class, 'show'])->name('registerForm');
Route::post('/register', [RegisterController::class, 'register'])->name('registerPost');


Route::get('/login', [LoginController::class, 'show'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('loginPost');

Route::group(['middleware' => ['auth']], function () {

Route::get('/', [InvoiceController::class, 'show'])->name('invoice');
Route::get('refill', [RefillBalanceController::class, 'show'])->name('refill-balance');

Route::get('withdraw', [WithdrawBalanceController::class, 'show'])->name('withdraw-balance');
 Route::post('withdraw', [WithdrawBalanceController::class, 'withdraw'])->name('withdrawPost');


Route::get('quotes', [QuotesController::class, 'show'])->name('quotes');

Route::get('settings', [SettingsController::class, 'show'])->name('settings');
 Route::post('settings/profile/update', [SettingsController::class, 'updateProfile'])->name('updateProfile');

Route::get('support', [SupportController::class, 'show'])->name('support');
Route::get('payment', [PaymentController::class, 'show'])->name('payment');

});
