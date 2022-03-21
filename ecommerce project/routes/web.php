<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentsController;

use App\Http\Controllers\EmployeeController;
//use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;


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

//Route::get('/', function () {
  //  return view('welcome');
//});
//Route::resource('products', ProductController::class);
Route::get('/product_index',[ProductController::class, 'index']);

Route::get('/product_delete/{id}',[ProductController::class, 'destroy']);

Route::get('/product_edit/{id}',[ProductController::class, 'edit']);

Route::post('/product_update/{id}',[ProductController::class, 'update'])->name('products.update');

Route::get('/product_create',[ProductController::class, 'create']);

Route::post('/product_store',[ProductController::class, 'store']);
//




//Route::get('/student',[StudentsController::class, 'welcome'])->name('student.welcome');

//Route::get('/student_delete/{id}',[StudentsController::class, 'destroy']);

//Route::get('/student_edit/{id}',[StudentsController::class, 'edit']);

//Route::post('/student_update/{id}',[StudentsControllerr::class, 'update'])->name('student.update');

//Route::get('/student_create',[StudentsController::class, 'create']);
//Route::post('/store',[StudentsController::class, 'store'])->name('student.store');


Route::get('/add-order',[OrderController::class, 'addOrder'])->name('order.index');
Route::post('/save-order',[OrderController::class, 'save'])->name('order.save');

Route::get('/add-form',[FormController::class, 'addform'])->name('form.index');
Route::post('/save-form',[FormController::class, 'save'])->name('form.save');

Route::get('/save',[HomeController::class,'index']);
Route::post('/save',[HomeController::class,'save']);





Route::get('/patient_show',[PatientController::class, 'show']);

Route::get('/patient_delete/{id}',[PatientController::class, 'destroy']);

Route::get('/patient_edit/{id}',[PatientController::class, 'edit']);

Route::post('/patient_update/{id}',[PatientController::class, 'update'])->name('patient.update');

Route::get('/patient_create',[PatientController::class, 'create']);

Route::post('/patient_submit',[PatientController::class, 'store']);




Route::get('/index', [EmployeeController::class, 'index']);
Route::post('/store', [EmployeeController::class, 'store'])->name('store');
Route::get('/fetchall', [EmployeeController::class, 'fetchAll'])->name('fetchAll');
Route::delete('/delete', [EmployeeController::class, 'delete'])->name('delete');
Route::get('/edit', [EmployeeController::class, 'edit'])->name('edit');
Route::post('/update', [EmployeeController::class, 'update'])->name('update');



//Route::post('/save',[EmployeController::class,'index']);
//Route::get('/save','EmployeController@index');

//Route::get('/save/create','EmployeController@create');

//Route::post('/Employeaction','EmployeController@storeDevice');












Route::get('/',[FrontendController::class,'index']);
Route::get('category',[FrontendController::class,'category']);
Route::get('view-category/{slug}',[FrontendController::class,'viewcategory']);
Route::get('category/{cate_slug}/{prod_slug}',[FrontendController::class,'productview']);


Route::get('product-list',[FrontendController::class,'productlistAjax']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function(){
  Route::get('cart',[CartController::class,'viewcart']);
 
  Route::get('checkout',[CheckoutController::class,'index']);
  Route::post('place-order',[CheckoutController::class,'placeorder']);




});
Route::post('add-to-cart',[CartController::class,'addproduct']);
Route::post('delete-cart-item',[CartController::class,'deleteproduct']);
Route::post('update-cart',[CartController::class,'updatecart']);





Route::middleware(['auth','isAdmin'])->group(function(){
  


    Route::get('/dashboard','App\Http\Controllers\Admin\FrontendController@index');
    Route::get('/categories','App\Http\Controllers\Admin\CategoryController@index');
    Route::get('/add-category','App\Http\Controllers\Admin\CategoryController@add');
    Route::post('/insert-category','App\Http\Controllers\Admin\CategoryController@insert');
    Route::get('edit-prod/{id}',[CategoryController::class,'edit']);
    Route::post('update-category/{id}',[CategoryController::class,'update']);
    Route::get('delete-category/{id}',[CategoryController::class,'destroy']);  
    Route::get('products',[ProductController::class,'index']);
    Route::get('add-product',[ProductController::class,'add']);
    Route::post('insert-product',[ProductController::class,'insert']);
    Route::get('edit-product/{id}',[ProductController::class,'edit']);
    Route::post('update-product/{id}',[ProductController::class,'update']);
    Route::get('delete-product/{id}',[ProductController::class,'destroy']);  

});



