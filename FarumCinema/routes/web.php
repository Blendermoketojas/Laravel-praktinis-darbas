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

// Route::resource('/Login',UserAuthController::class)->name('login','login');



Route::resource('/Miestai',PastatasController::class)->name('index','miestai');

 Route::resource('/filmosale',VietosController::class)->name('index','filmosale');


//  Route::post('/Miestai',[AdminController::class,'login'])->name('login');


// Route::get('/AdminRemoval',function(){
// return view('AdminRemoval');
// })->name('AdminRemoval');

 Route::post('/Mietai', [VietosController::class, 'reserveSeat'])->name('vietos.reserveSeat');

// Route::get('/admin', [AdminController::class, 'index'])->middleware('admin');

Route::get('/destroySession', function () {
    session()->flush();
    return view('Miestai');
})->name('logout');

