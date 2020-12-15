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

/**
 * Public
 */
Route::prefix('/common')->group(function () {

    // Contact form
    Route::post('/contact', 'Api\V1\Common\Send\ContactFormController');
});

Route::fallback(function () {
    return response()->json(['message' => 'Page Not Found'], 404);
});

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */
