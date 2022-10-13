<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorMaintenanceControllor;
use App\Http\Controllers\ExtendedAuthController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [PagesController::class,'index'])->name('homepage');


Route::get("/products",[PagesController::class,'products'])->name('products');

Route::get("/contact", [PagesController::class,'contact'])->name('contact');

Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

Route::prefix("dashboard")->middleware(['auth'])->group(function (){
    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/voorbeeld',[DashboardController::class,'voorbeeld']);
    Route::prefix("sales")->group(function () {
        Route::resource("products",ProductsController::class);
    });

    Route::prefix("maintenance")->group(function () {
        Route::resource("maintenance",ErrorMaintenanceControllor::class);
    });

    Route::get("/bkr",[PagesController::class,'bkr'])->name('bkr');
    Route::post('/bkr',[ContactController::class,'storeBKR'])->name('bkr.store');

    Route::prefix('finance')->group(function () {
        Route::resource("invoices", InvoicesController::class);
    });

    Route::get('/logout',[ExtendedAuthController::class,'logout'])->name('uitlog');
});
require __DIR__.'/auth.php';
