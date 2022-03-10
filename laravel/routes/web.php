<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentsController;


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
//Route::get('/students',[StudentsController::class, 'welcome'])->name('student.index');
//Route::post('/store',[StudentsController::class, 'store'])->name('student.');
Route::get('/student',[StudentsController::class, 'welcome'])->name('student.welcome');
Route::post('/store',[StudentsController::class, 'store'])->name('student.store');
//Route::get('/student', 'App\Http\Controllers\StudentsController@welcome');
    //Route::post('/store', 'App\Http\Controllers\StudentsController@store');

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








//Route::post('/save',[EmployeController::class,'index']);
//Route::get('/save','EmployeController@index');

//Route::get('/save/create','EmployeController@create');

//Route::post('/Employeaction','EmployeController@storeDevice');
