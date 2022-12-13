<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EducationalController;
use App\Http\Controllers\EstudentController;
use App\Http\Controllers\GradingController;
use App\Http\Controllers\PeriodController;
use App\Http\Controllers\ProyectInvController;
use App\Http\Controllers\ResultController;
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
route::apiResource('categories',CategoryController::class);
route::apiResource('educationals',EducationalController::class);
route::apiResource('estudents',EstudentController::class);
route::apiResource('gradings',GradingController::class);
route::apiResource('periods',PeriodController::class);
route::apiResource('proyectInvs',ProyectInvController::class);
route::apiResource('results',ResultController::class);



Route::group(['prefix' => '/auth', ['middleware' => 'throttle:20,5']], function() {
    Route::post('/register', 'Auth\RegisterController@register');
    Route::post('/login', 'Auth\LoginController@login');

    Route::get('/login/{service}', 'Auth\SocialLoginController@redirect');
    Route::get('/login/{service}/callback', 'Auth\SocialLoginController@callback');
});

Route::group(['middleware' => 'jwt.auth'], function() {
    Route::get('/me', 'MeController@index');

    Route::get('/auth/logout', 'MeController@logout');
});