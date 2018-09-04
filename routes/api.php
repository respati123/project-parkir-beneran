<?php

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

Route::group(['prefix' => '/v1', 'namespace' => 'Api\v1', 'as' => 'api.'], function(){
   Route::resource('permissions', 'PermissionsController', ['expect' => ['create','edit']]);
});

Route::group(['prefix' => '/v1', 'namespace' => 'Api\v1', 'as' => 'api.'], function(){
    Route::resource('roles', 'RolesController', ['expect' => ['create','edit']]);
    Route::get('/getAllPermissions', function(){
        $permission = \App\Permission::all();
        return response()->json([
            'data' => $permission
        ]);
    });
});

