<?php

use App\Http\Controllers\CustomerController;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware(['auth:sanctum'])->get('/customers', function (Request $request) {
    return $request->customers();
});

Route::get('data', [CustomerController::class, 'index']);

Route::get('/customers', 'App\Http\Controllers\CustomerController@index');
Route::get('customers/{customer}', 'App\Http\Controllers\CustomerController@show');
Route::post('customers', 'App\Http\Controllers\CustomerController@store');
Route::put('customers/{customer}', 'App\Http\Controllers\CustomerController@update');
Route::delete('customers/{customer}', 'App\Http\Controllers\CustomerController@delete');
