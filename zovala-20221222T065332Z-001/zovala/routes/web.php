<?php

use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\MeasurementController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\SubCountyController;
use App\Http\Controllers\TownController;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\County;
use App\Http\Livewire\SubCounty;
use App\Http\Livewire\Town;

/*
|--------------------------------------------------------------------------
| Web Routes - are requests/routes that originate from your web browser
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('test');
    //echo "<h1>Default request</h1>";
});

Route::get('jaribu', function () {
    return view('jaribu');
    //echo "<h1>Default request</h1>";
});

//Roles routes
Route::get('roles',[RoleController::class,'all']);
Route::get('role/add',[RoleController::class,'add']);
Route::post('role/save',[RoleController::class,'save']);
Route::post('role/saveChanges/{id}',[RoleController::class,'saveChanges']);
Route::get('role/edit/{id}',[RoleController::class,'edit']);
Route::get('role/delete/{id}',[RoleController::class,'delete']);

//county
Route::get('counties',County::class);

//subcounty
Route::get('subcounties',SubCounty::class);
//towns
Route::get('towns',Town::class);
//users
Route::get('users',[UserController::class,'all']);


Route::get('county',[CountyController::class,'all']);


Route::get('designs',[DesignController::class,'all']);


Route::get('materials',[MaterialController::class,'all']);


Route::get('measurements',[MeasurementController::class,'all']);


Route::get('orders',[OrderController::class,'all']);


Route::get('payments',[PaymentController::class,'all']);


Route::get('photos',[PhotoController::class,'all']);


Route::get('ratings',[RatingController::class,'all']);


Route::get('subcounty',[SubCountyController::class,'all']);


