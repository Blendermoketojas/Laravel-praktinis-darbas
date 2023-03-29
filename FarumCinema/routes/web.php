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

Route::get('/Confirmation', function () {
    return view('Confirmation');
})->name('Confirmation');

Route::get('/Login', function () {
    return view('Login');
})->name('auth');

Route::get('/Login1',[AdminController::class, 'login'])->name('login');

// Route::post('/Login/login',[AdminController::class,'login'])->name('Login');



Route::resource('/Miestai',PastatasController::class)->name('index','miestai');

 Route::resource('/filmosale',VietosController::class)->name('index','filmosale');




// Route::get('/AdminRemoval',function(){
// return view('AdminRemoval');
// })->name('AdminRemoval');

 Route::post('/Miestai', [VietosController::class, 'reserveSeat'])->name('vietos.reserveSeat');

// Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');

Route::get('/destroySession', function () {
    session()->flush();
    return view('Miestai');
})->name('logout');

