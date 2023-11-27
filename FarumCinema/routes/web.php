<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormRendered;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PastatasController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\VietosController;
use App\Models\Pastatas;

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


Route::redirect('/', '/Login');


Route::resource('/filmosales', SalesController::class);

Route::get('/Confirmation', function () {
    return view('Confirmation');
})->name('Confirmation');

Route::get('/Login', function () {
    return view('Login');
})->name('auth');

Route::post('/Login1', [AdminController::class, 'login'])->name('login');

Route::resource('/Miestai', PastatasController::class)->name('index', 'miestai');

Route::resource('/filmosale', VietosController::class)->name('index', 'filmosale');

Route::post('/Miestai', [VietosController::class, 'reserveSeat'])->name('vietos.reserveSeat');

Route::get('/AdminRemoval', function () {
    return view('AdminRemoval');
})->name('AdminRemoval')->middleware('admin');

Route::post('/AdminRemoval1', [AdminController::class, 'update'])->middleware('admin')->name('AdminRemoval1');


Route::get('/destroySession', [AdminController::class, 'logout'])->name('logout');

Route::get('/MiestaiAdd', function () {
    return view('MiestaiAdd');
})->name('MiestaiAdd')->middleware('admin');

Route::get('/MiestaiDel', function () {
    $pastatai = Pastatas::all();
    return view('MiestaiDel', compact('pastatai'));
})->name('MiestaiDel')->middleware('admin');

Route::get('/MiestaiDelConf', function () {
    return view('MiestaiDelConf');
})->name('MiestaiDelConf')->middleware('admin');



Route::post('/ConfAdd', [PastatasController::class, 'cityAddfunc'])->name('ConfAdd')->middleware('admin');

Route::post('/CityDelConf', [PastatasController::class, 'cityDelfunc'])->name('CityDelConf')->middleware('admin');
