<?php

use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\PackageController;
use App\Http\Controllers\Backend\AppoinmentController;
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
    return redirect()->route('admin');
});


Route::group(['prefix'=>'admin-portal'],function(){
    Route::get('/', function () {
        return view('admin.master');
    })->name('admin');
    Route::get('/services',[ServiceController::class,'serviceList'])->name('admin.services');
    Route::get('/services/create',[ServiceController::class,'serviceCreate'])->name('admin.service.create');
    Route::post('/service/store',[ServiceController::class,'store'])->name('admin.service_type.store');


    Route::get('/categorys',[CategoryController::class,'categoryList'])->name('admin.categorys');
    Route::get('/categorys/create',[CategoryController::class,'categoryCreate'])->name('admin.category.create');
    Route::post('categorys/store',[CategoryController::class,'store'])->name('admin.category.store');
    Route::get('/packages',[PackageController::class,'packageList'])->name('admin.packages');
    //Route::get('/appoinments',[AppoinmentController::class,'appoinmentList'])->name('admin.appoinment');

    Route::get('/appoinment',[AppoinmentController::class,'appoinmentList'])->name('admin.appoinment');
    Route::get('/appoinment/create',[AppoinmentController::class,'appoinmentCreate'])->name('admin.appoinment.create');
    Route::post('/appoinment/store',[AppoinmentController::class,'store'])->name('admin.appoinment_type.store');

    //Route::get('/',[AppoinmentController::class,'appoinmentList'])->name('admin.appoinment');
    //Route::get('/appoinment/create',[AppoinmentController::class,'appoinmentCreate'])->name('admin.appoinment.create');
    //Route::post('/appoinment/store',[AppoinmentController::class,'store'])->name('admin.appoinment_type.store');
 


});
