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
Route::namespace('Api')->group(function () {
    Route::resource('crop', 'CropClaimantController');
    Route::get('all', 'CropClaimantController@all');
    Route::post('all', 'CropClaimantController@insertall');
    Route::resource('structure', 'StructureController');
});


// default scaffold
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
