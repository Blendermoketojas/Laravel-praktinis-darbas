<?php

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

Route::post('/confirmation', function () {
    return view('Confirmation');
})->name('confirm');

Route::get('/login', function () {
    return view('Login');
})->name('login');



Route::resource('/Miestai',PastatasController::class)->name('index','miestai');

Route::resource('/filmosale',VietosController::class)->name('index','filmosale');
Route::post('user',[UserAuthController::class,'login']);
Route::get('/filmoSaleAdmin',function(){
return view('filmoSaleAdmin');

})->name('filmosaleadmin');