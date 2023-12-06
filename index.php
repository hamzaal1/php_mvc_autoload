<?php
require_once 'core/autoload.php';
use App\Route;
use App\Controller\HomeController;

Route::get('/php_mvc_full/',HomeController::class,'index');
Route::get("/php_mvc_full/delete/user/{id}",HomeController::class,'destroy');
Route::get("/php_mvc_full/edit/user/{id}",HomeController::class,'edit');
Route::post("/php_mvc_full/update/user/{id}",HomeController::class,'update');
Route::get("/php_mvc_full/create/user/",HomeController::class,'create');
Route::post("/php_mvc_full/store/user/",HomeController::class,'store');