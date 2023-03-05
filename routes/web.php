<?php

use App\Http\Controllers\AnonymousOrderController;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\FoodMainCategoryController;
use App\Http\Controllers\FoodMainVendorController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ShippingPricingController;
use App\Models\AnonymousOrder;
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

Route::get('/', function () {
    return redirect("/dashboard");
});



Route::view('/dashboard', 'dashboard.dashboard');

Route::view("add-product","dashboard.products.add")->name("add-product");
// Route::view('add-supplier','dashboard.suppliers.add')->name("addSupplier");
// Route::view('suppliers','dashboard.suppliers.index')->name("suppliers");
// Route::view("category", "dashboard.categories.index")->name("category");
// Route::view('add-category',"dashboard.categories.add")->name('addCategory');

Route::resource('category', FoodMainCategoryController::class)->name('any','category');





Route::resource('supplier', FoodMainVendorController::class)->name('any', 'supplier');
Route::get("supplier/{vendor_id}/search/{food_name}", [FoodMainVendorController::class,"searchFood"])->name("supplier.searchFood");


Route::resource("product", FoodController::class)->name("any", 'product');




Route::resource("delivery-location", ShippingPricingController::class)->name("any" , "deliveryLocation");




Route::resource("order",OrderController::class)->name("any",'order');
Route::get("order/cancel/{id}",[OrderController::class,"cancel"])->name("order.cancel");
Route::get("order/invoice/{id}",[OrderController::class,"invoice"])->name("order.invoice");
// Route::get("order/detail/{id}",[OrderController::class,"info"])->name('order.info');




Route::resource("anonymous-order",AnonymousOrderController::class)->name('any',"anonymousOrder");
Route::get("anonymous-order/cancel/{id}",[AnonymousOrderController::class,"cancel"])->name("anonymousOrder.cancel");
Route::get("anonymous-order/invoice/{id}",[AnonymousOrderController::class,"invoice"])->name("anonymousOrder.invoice");
