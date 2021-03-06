<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\ItemLineController;
use App\Http\Controllers\PurchTransController;
use App\Http\Controllers\SalesTransController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\SuppCreditNoteController;
use App\Http\Controllers\CreditNoteController;

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

Route::get('/admin',function(){
    return view('layouts/dashboard/app');
});

Route::resources([
    'Business' => BusinessController::class,
    'Category' => CategoryController::class,
    'Customers' => CustomerController::class,
    'Item' => ItemController::class,
    'ItemLine' => ItemLineController::class,
    'PurchaseTrans' => PurchTransController::class,
    'SalesTrans' => SalesTransController::class,
    'Suppliers' => SupplierController::class,
    'SuppCreditNote' => SuppCreditNoteController::class,
    'CreditNote' => CreditNoteController::class,    
]);
