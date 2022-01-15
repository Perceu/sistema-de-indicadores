<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', [Api\HomeController::class, 'index'])->name('home');
Route::get('/indicador', [Api\IndicadorController::class, 'index'])->name('indicador');
Route::get('/indicador/full', [Api\IndicadorController::class, 'full'])->name('indicadorFull');
Route::get('/indicador/maps', [Api\IndicadorController::class, 'maps'])->name('indicadorMaps');