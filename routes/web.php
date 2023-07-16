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


Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/login', [LoginController::class, 'index'])->name('login');

Route::get('/dashboard/invoice', [InvoiceController::class, 'index'])->name('invoice');
Route::get('/dashboard/refill-balance', [RefillBalanceController::class, 'index'])->name('refill-balance');
Route::get('/dashboard/withdraw-balance', [WithdrawBalanceController::class, 'index'])->name('withdraw-balance');
Route::get('/dashboard/quotes', [QuotesController::class, 'index'])->name('quotes');
Route::get('/dashboard/settings', [SettingsController::class, 'index'])->name('settings');
Route::get('/dashboard/support', [SupportController::class, 'index'])->name('support');
Route::get('/dashboard/payment', [PaymentController::class, 'index'])->name('payment');
