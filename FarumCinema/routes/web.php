<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormRendered;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PastatasController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\VietosController;
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


Route::redirect('/','/Miestai');


Route::resource('/filmosales',SalesController::class);

Route::GET('/Confirmation', function () {
    return view('Confirmation');
})->name('Confirmation');

Route::get('/login', function () {
    return view('Login');
})->name('login');



Route::resource('/Miestai',PastatasController::class)->name('index','miestai');

 Route::resource('/filmosale',VietosController::class)->name('index','filmosale');


 Route::post('/Miestai',[AdminController::class,'login'])->name('login');
 Route::get('/Miestai', [PastatasController::class, 'index'])->name('miestai');

Route::get('/AdminRemoval',function(){
return view('AdminRemoval');
})->name('AdminRemoval');

 Route::post('/Miestai', [VietosController::class, 'reserveSeat'])->name('vietos.reserveSeat');

Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');

Route::get('/destroySession', function () {
    session()->flush();
    return view('Miestai');
})->name('logout');

