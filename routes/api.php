<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriacontroller; 

Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});

Route::get('/categoria', [\App\Http\Controllers\categoriacontroller::class, 'getCategoria']);

Route::get('/categoria/{id}', [\App\Http\Controllers\categoriacontroller::class, 'getCategoriaxid']);