<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
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

Route::get('/', [AddressController::class, 'index'])->name('address.index');
Route::get('/find', [AddressController::class, 'find'])->name('address.find');
Route::post('/store', [AddressController::class, 'store'])->name('address.store');
Route::get('/show/{cep}', [AddressController::class, 'show'])->name('address.show');
