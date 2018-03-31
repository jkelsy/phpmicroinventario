<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('terceros', 'TerceroController')->middleware('cors');
Route::resource('ventas', 'VentaController')->middleware('cors');
Route::resource('pagos', 'PagoController')->middleware('cors');
Route::get('terceros/{id}/deuda', 'TerceroController@deuda')->middleware('cors');