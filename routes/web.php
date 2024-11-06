<?php

use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('upload','upload');
Route::post('upload',[ImageController::class,'upload']);
Route::get('list',[ImageController::class,'list']);
