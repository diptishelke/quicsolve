<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;

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
