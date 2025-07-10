<?php

use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get("/",[MyController::class,"index"]);
Route::post("/",[MyController::class,"create"]);
// Route::get("/demo/{name}/{id?}" , function($name , $id = null){
//     echo $name;
//     echo $id;
// });
Route::get("select" , [MyController::class , "select"]);
Route::get("edit/{id}" , [MyController::class , "editData"]);
Route::post("edit/{id}" , [MyController::class , "update"]);
Route::delete("delete/{id}" , [MyController::class , "Delete"]);
