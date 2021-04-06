<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PriceCalculation;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/price-calculation', [PriceCalculation::class, 'form'])
->name('price-calculation-form');

Route::post('/price-calculation', [PriceCalculation::class, 'result'])
->name('price-calculation-result');


Route::get('/area', [PriceCalculation::class, 'area'])
->name('area-form');

Route::post('/area', [PriceCalculation::class, 'arearesult'])
->name('area-result');


Route::get('/mul', [PriceCalculation::class, 'mul'])
->name('mul-form');

Route::post('/mul', [PriceCalculation::class, 'mulresult'])
->name('mul-result');

//Mul V2 To Class
Route::get('/mulv2', [PriceCalculation::class, 'mulv2'])
->name('mulv2-form');

Route::post('/mulv2', [PriceCalculation::class, 'mulv2result'])
->name('mulv2-result');