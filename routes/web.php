<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::post('/login', [LoginController::class, 'authenticate']);
Route::get('/dashboard', [ProductController::class, 'index'])->name('products.index');
Route::get('/about', [ProductController::class, 'about'])->name('products.about');
Route::resource('transactions', TransactionController::class);
Route::get('/admin/dashboard', [TransactionController::class, 'dashboard'])->name('transactions.dashboard');
Route::resource('reports', ReportController::class);
Route::get('getReport', [ReportController::class, 'getData'])->name('reports.getData');
Route::resource('products', ProductController::class);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
