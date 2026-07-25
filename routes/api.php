<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\categoriacontroller; 

Route::middleware('auth:api')->get('/user', function (Request $request){
    return $request->user();
});

Route::get('/categoria', [\App\Http\Controllers\categoriacontroller::class, 'getCategoria']);

Route::get('/categoria/{id}', [\App\Http\Controllers\categoriacontroller::class, 'getCategoriaxid']);

Route::post('addCategoria', [\App\Http\Controllers\categoriacontroller::class, 'insertCategoria']);

Route::put('updateCategoria/{id}', [\App\Http\Controllers\categoriacontroller::class, 'updateCategoria']);

Route::delete('deleteCategoria/{id}', [\App\Http\Controllers\categoriacontroller::class, 'deleteCategoria']);