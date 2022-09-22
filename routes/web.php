<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller ; 
use App\Http\Controllers\Productcontroller ; 

Route::get('/login', function () {
    return view('Login');
});

Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/login');
});

Route::view('/registre','registre') ;
Route::post("/login",[usercontroller::class,'login']);

Route::post("/registre",[usercontroller::class,'registre']);
Route::get("/",[Productcontroller::class,'index']);
Route::get("/detail/{id}",[Productcontroller::class,'detail']);
Route::get("/search",[Productcontroller::class,'search']);
Route::post("/add_to_cart",[Productcontroller::class,'addToCart']);
Route::get("/cartlist",[Productcontroller::class,'cartlist']);
Route::get("/removecart/{id}",[Productcontroller::class,'removecart']);
Route::get("/ordernow",[Productcontroller::class,'ordernow']);
Route::post("/orderplace",[Productcontroller::class,'orderplace']);
Route::get("/myorders",[Productcontroller::class,'myorders']);


