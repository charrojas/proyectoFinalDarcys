<?php

use App\Http\Controllers\ControllerCarrito;
use App\Http\Controllers\controllerClientes;
use App\Http\Controllers\ControllerCocteles;
use App\Http\Controllers\ControllerIngredientesCocteles;
use App\Http\Controllers\ControllerLogin;
use App\Http\Controllers\ControllerTienda;
use App\Http\Controllers\IngredientesController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ControllerTienda::class, 'index'])->name('inicio');
Route::get('/ver_planes', [ControllerTienda::class, 'ver_planes'])->name('planes');
Route::get('/nosotros', [ControllerTienda::class, 'nosotros'])->name('nosotros');
Route::get('/categoria{id}', [ControllerTienda::class, 'mostrarCategoria'])->name('categoria');

Route::get('/carrito', [ControllerCarrito::class, 'index'])->name('car');
Route::resource('carri', ControllerCarrito::class);

Route::post('paypal/paypal', [PaymentController::class, 'payment'])->name('paypal');
Route::get('paypal/success', [PaymentController::class, 'success'])->name('paypal_success');
Route::get('paypal/cancel', [PaymentController::class, 'cancel'])->name('paypal_cancel');


Route::post('/plan', [controllerClientes::class, 'showPlan'])->name('plan');

Route::get('/login', [ControllerLogin::class, 'showLoginForm'])->name('login');
Route::post('/login', [ControllerLogin::class, 'login']);
Route::get('/logout', [ControllerLogin::class, 'logout'])->name('logout');

// Rutas que requieren inicio de sesión
Route::middleware('auth')->resource('clientes', controllerClientes::class);
Route::middleware('auth')->resource('cocteles', ControllerCocteles::class);
Route::middleware('auth')->resource('coctelesIngredientes', ControllerIngredientesCocteles::class);
Route::middleware('auth')->resource('ingredientes', IngredientesController::class);
