<?php

use App\Http\Controllers\FormRendered;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KlaipedaA1Controller;

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
    return view('fullcinemalist');
});

Route::resource('/filmosale', KlaipedaA1Controller::class)->name('index', 'klpA1');


Route::get('/visosfilmosales', function () {
    return view('fullcinemalist');
})->name('visosfilmosales');

Route::post('/confirmation', function () {
    return view('Confirmation');
})->name('confirm');

Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::post('/visosfilmosales', [KlaipedaA1Controller::class, 'store'])->name('klpA1.store');

Route::get('/Miestai', function () {
    return view('Miestai');
})->name('miestai');