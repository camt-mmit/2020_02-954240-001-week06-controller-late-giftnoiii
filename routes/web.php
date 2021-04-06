<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pricecalucation ;
use App\Http\Controllers\area ;
use App\Http\Controllers\mul ;
use App\Http\Controllers\mulv2 ;


Route::get('/price-calculation', [Pricecalucation ::class, 'form'])
     ->name('price-calculation-form');
Route::post('/price-calculation', [Pricecalucation ::class, 'result'])
     ->name('price-calculation-result');

Route::get('/area', [area ::class, 'form'])
     ->name('area-form');
Route::post('/area', [area ::class, 'Result'])
     ->name('area-result');    

Route::get('/mul', [mul ::class, 'form'])
     ->name('mul-form');
Route::post('/mul', [mul ::class, 'Result'])
     ->name('mulv2-result');  

Route::get('/mulv2', [mulv2 ::class, 'form'])
     ->name('mulv2-form');
Route::post('/mulv2', [mulv2 ::class, 'Result'])
     ->name('mulv2-result');  