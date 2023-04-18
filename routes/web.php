<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\VentaController;
use App\Http\Controllers\AdminController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/users', UserController::class);

Route::resource('productos', ProductoController::class);

Route::get('/catagaloProd',[UserController::class,'catalogo'])->name('catalogoProd');;

Route::resource('ventas', VentaController::class);

Route::post('ventascrear', [VentaController::class, 'prueba'])->name('ventas.prueba');

Route::resource('administrar', AdminController::class);

Route::get('download-pdf',[ProductoController::class,'generar_pdf'])->name('descargar_pdf');

Route::get('/vistaApi',  [AdminController::class, 'creacionApi']);

Route::get('download-pdf2',[UserController::class,'generar_pdf2'])->name('descargar_pdf2');

