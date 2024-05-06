<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LayoutController;

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
    return view('welcome');
});


Route::get('/dashboard', [LayoutController::class, 'index'])->name('dashboard');
Route::get('/docs', [LayoutController::class, 'docs'])->name('docs');
Route::get('/orders', [LayoutController::class, 'orders'])->name('orders');
Route::get('/settings', [LayoutController::class, 'settings'])->name('settings');


Route::get('/add', [LayoutController::class, 'ind'])->name('ind');
Route::post('/add', [LayoutController::class, 'add'])->name('add');

