<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

require_once 'api_routes/order.php';
require_once 'api_routes/rest_api_order.php';

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

