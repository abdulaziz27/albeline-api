<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products', 'App\Http\Controllers\ProductController@index');
Route::get('/product/{id}', 'App\Http\Controllers\ProductController@show');
Route::get('/category', 'App\Http\Controllers\ProductController@getCategories');
Route::get('/category/{id}', 'App\Http\Controllers\ProductController@byCategory');
Route::get('/image/{id}', 'App\Http\Controllers\ImageController@show');
Route::get('/banners/{banner}', 'App\Http\Controllers\ImageController@banner');

Route::post('/register', 'App\Http\Controllers\UserController@register');
Route::post('/login', 'App\Http\Controllers\UserController@login');
Route::get('email/verify/{id}', 'App\Http\Controllers\VerificationApiController@verify')->name('verificationapi.verify');
Route::post('email/resend', 'App\Http\Controllers\VerificationApiController@resend')->name('verificationapi.resend');