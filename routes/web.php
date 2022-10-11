<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
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

Route::get("/bkr",[PagesController::class,'bkr'])->name('bkr');

Route::get("/contact", [PagesController::class,'contact'])->name('contact');

Route::prefix("dashboard")->group(function (){
    Route::get('/',[DashboardController::class,'index']);
    Route::get('/voorbeeld',[DashboardController::class,'voorbeeld']);
    Route::prefix("sales")->group(function () {
        Route::resource("products",ProductsController::class);
    });
});

require __DIR__.'/auth.php';
