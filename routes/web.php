<?php

use App\Http\Controllers\ClientsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorMaintenanceControllor;
use App\Http\Controllers\ExtendedAuthController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\LeasecontractsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MaintenanceMeetingController;
use App\Http\Controllers\MalfunctionsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserVerifyController;
use App\Http\Controllers\WorkOrderController;
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

Route::get('/pt',[PagesController::class,'products'])->name('products.test');

Route::get('/offers/{id}', [PagesController::class,'offers'])->name('offers');

Route::get("/contact", [PagesController::class,'contact'])->name('contact');

Route::post('/contact',[ContactController::class,'store'])->name('contact.store');

Route::get('/mail-send', [MailController::class, 'mailSend']);

Route::get('/user/verify/{token}', [UserVerifyController::class,'verify'])->name('user.verify');

Route::post('/user/verify/',[UserVerifyController::class,'store'])->name('verify.store');

Route::prefix("dashboard")->middleware(['auth'])->group(function (){
    Route::prefix('clients')->group(function () {
        Route::get('/personal',[ClientsController::class,'personalData'])->name('personal.data');
        Route::get('/personal/{id}',[ClientsController::class,'personalDataEdit'])->name('personal.data.edit');
        Route::put('/personal-data-update/{id}',[ClientsController::class,'personalDataUpdate'])->name('personalDataUpdate');
        Route::get('/personal-lease-contract',[ClientsController::class,'personalLeaseContract'])->name('personal.lease.contract');
        Route::get('/personal-invoice',[ClientsController::class,'personalInvoice'])->name('personal.invoices');
        Route::get('/personal-bestellingen',[ClientsController::class,'bestellingen'])->name('personal.bestellingen');
        Route::get('/personal-lease-products',[ClientsController::class,'personalLeaceProducts'])->name('personal.products');
        Route::get('/personal-storingen',[ClientsController::class,'showStoringen'])->name('personal.storingen');

        Route::get('/personal/{company}/{id}',[ClientsController::class,'storeStoring'])->name('personal.storing');
    });

    Route::get('/',[DashboardController::class,'index'])->name('dashboard');
    Route::get('/voorbeeld',[DashboardController::class,'voorbeeld']);
    Route::prefix("sales")->group(function () {
        Route::resource("products",ProductsController::class);
        Route::get('/clients',[ClientsController::class,'index'])->name('klant.index');
        Route::get('/clients/{user}/note',[ClientsController::class,'client'])->name('klant.show');
        Route::get('/clients/create',[ClientsController::class,'create'])->name('klant.create');
        Route::post('/clients/store',[ClientsController::class,'store'])->name('klant.store');
        Route::post('/clients',[ClientsController::class,'addNote'])->name('klant.note');
        Route::get('/mail/{id}', [MailController::class,'mailSend'])->name('klant.email');


        Route::get('/orders',[ProductsController::class,'seeOrders'])->name('products.order.see');
        Route::get('/orders/{order}/',[ProductsController::class,'order'])->name('products.order.keur');

        Route::get("/products/order/{product}",[ProductsController::class,'orderProduct'])->name('products.order');
        Route::post('/products/',[ProductsController::class,'storeOrder'])->name('products.order.store');
    });

    Route::prefix("maintenance")->group(function () {
        Route::resource("meetings",ErrorMaintenanceControllor::class);
        Route::get('/plan',[MaintenanceMeetingController::class,"index"])->name('maintenance.plan');
        Route::resource('workorders',WorkOrderController::class);
    });

    Route::prefix("malfunctions")->group(function () {
        Route::resource('malfunctions',MalfunctionsController::class);
    });

    Route::get("/bkr",[PagesController::class,'bkr'])->name('bkr');
    Route::post('/bkr',[ContactController::class,'storeBKR'])->name('bkr.store');

    Route::prefix('finance')->group(function () {
        Route::resource("invoices", InvoicesController::class);
        Route::resource("leasecontracts", LeasecontractsController::class);
    });

    Route::get('/logout',[ExtendedAuthController::class,'logout'])->name('uitlog');
});
require __DIR__.'/auth.php';
