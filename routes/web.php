<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashblard;
use App\Http\Controllers\Shopping;

Route::get('/dashboard',[Dashblard::class,'index'])->middleware('auth');
Route::get('/products',[Dashblard::class,'products'])->name('products')->middleware('auth');
Route::post('/create_newproducts',[Dashblard::class,'create_newproducts'])->name('create_newproducts')->middleware('auth');
Route::get('/shoproductdata',[Dashblard::class,'shoproductdata'])->name('shoproductdata')->middleware('auth');
Route::get('/delete',[Dashblard::class,'delete'])->name('delete')->middleware('auth');

Route::get('/edit/{id}',[Dashblard::class,'edit'])->name('edit')->middleware('auth');
Route::get('/update',[Dashblard::class,'update'])->name('update')->middleware('auth');
Route::get('/showproduct_details',[Dashblard::class,'showproduct_details'])->name('showdet')->middleware('auth');
Route::post('/create_new_details',[Dashblard::class,'create_new_details'])->name('createnewdet')->middleware('auth');


Route::get('/',[Shopping::class,'index'])->name('index');

Route::get('/electric',[Shopping::class,'electric'])->name('electric');

Route::get('/Seeds',[Shopping::class,'Seeds'])->name('Seeds');
Route::get('/productdetails/{id}',[Shopping::class,'productdetails'])->name('proddet');
Route::get('/add_to_cart',[Shopping::class,'add_to_cart'])->name('add_to_cart');
Route::get('/Indoor_Plants',[Shopping::class,'Indoor_Plants'])->name('Indoor_Plants');
Route::get('/Outdoor_plants',[Shopping::class,'Outdoor_plants'])->name('Outdoor_plants');
Route::get('/Gardening_Tools',[Shopping::class,'Gardening_Tools'])->name('Gardening_Tools');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
