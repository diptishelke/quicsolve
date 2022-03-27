<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\BillingController ;
use App\Http\Controllers\InvoiceController;

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
Route::get('', function () {
    return view('billing.register');
});
    
Route::get('/login',[RegisterController::class,'login']);
Route::get('/register',[RegisterController::class,'register']);

Route::post('/store',[RegisterController::class,'store'])->name('store');

Route::post('logindata',[RegisterController::class,'logindata'])->name('logindata');

Route::get('/billing-list',[BillingController::class,'index']);
Route::get('/add', [BillingController::class, 'add']);
Route::post('/insert',[BillingController::class,'insert']);
Route::get('view',[BillingController::class,'view']);
Route::get('download',[BillingController::class,'download']);

Route::post('update-/{id}',[BillingController::class,'update']);

Route::get('billing_list/delete/{rec_id}',[BillingController::class,'destroy']);


Route::get('/view',[InvoiceController::class,'index']);
Route::get('/create', [InvoiceController::class, 'create']);
Route::post('/insert',[InvoiceController::class,'insert']);