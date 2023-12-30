<?php
require_once '../core/autoload.php';
use App\Route;
use App\Controller\HomeController;

Route::get('/',HomeController::class,'index');
Route::get("/delete/user/{id}",HomeController::class,'destroy');
Route::get("/edit/user/{id}",HomeController::class,'edit');
Route::post("/update/user/{id}",HomeController::class,'update');
Route::get("/create/user/",HomeController::class,'create');
Route::post("/store/user/",HomeController::class,'store');


