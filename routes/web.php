<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NiyontronController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\MaintenanceController;
use App\Http\Controllers\PropertyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[NiyontronController::class,'index'])->name('home');
Route::get('/login',[NiyontronController::class,'login'])->name('login');
Route::post('/customer-loginCheck',[NiyontronController::class,'loginCheck'])->name('customer-loginCheck');
Route::get('/dashboard',[NiyontronController::class,'dashboard'])->name('dashboard');
Route::get('/services',[NiyontronController::class,'services'])->name('services');
Route::get('/service-providers',[NiyontronController::class,'serviceProviders'])->name('service-providers');
Route::get('/property-list',[NiyontronController::class,'propertyList'])->name('property-list');
Route::get('/contact',[NiyontronController::class,'contact'])->name('contact');
Route::get('/rent-management',[NiyontronController::class,'rentManagement'])->name('rent-management');

Route::get('/repair-request',[MaintenanceController::class,'repairRequest'])->name('repair-request');
Route::post('/repair-request-create',[MaintenanceController::class,'store'])->name('repair-request-create');
Route::get('/repair-request-view',[MaintenanceController::class,'view'])->name('repair-request-view');
Route::get('/repair-request-deatils/{id}',[MaintenanceController::class,'details'])->name('repair-request-details');
Route::get('/repair-request-status',[MaintenanceController::class,'status'])->name('repair-request-status');

Route::get('/property-add',[PropertyController::class,'create'])->name('property-add');
Route::post('/property-create',[PropertyController::class,'store'])->name('property-create');
Route::get('/property-view',[PropertyController::class,'index'])->name('property-view');
Route::get('/property-edit/{id}',[PropertyController::class,'edit'])->name('property-edit');
Route::post('/property-update/{id}',[PropertyController::class,'update'])->name('property-update');
Route::get('/property-detele/{id}',[PropertyController::class,'delete'])->name('property-delete');
Route::get('/property-details/{id}',[PropertyController::class,'details'])->name('property-details');

Route::resource('register',CustomerController::class);

