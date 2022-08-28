<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProducersController;

Route::get('/producers', [ProducersController::class , 'list']);

Route::get('/products', [ProductsController::class , 'list']);

Route::post('/products', [ProductsController::class , 'create']);

Route::put('/products/{id}', [ProductsController::class , 'update']);

Route::delete('/products/{id}', [ProductsController::class , 'delete']);
