<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home;
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


Route::get('/Acceptation', [Home::class, 'Acceptation'])->name('Acceptation');
Route::get('/Ban', [Home::class, 'Ban'])->name('Ban');
Route::get('/Refus', [Home::class, 'Refus'])->name('Refus');
Route::get('/Used', [Home::class, 'Used'])->name('Used');
