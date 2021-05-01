<?php

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

Route::prefix('ead/ead')->group(function () {
    Route::prefix('eds')->group(function () {
        Route::get('/', 'EdController@index');
        Route::get('/{id}', 'EdController@show');
        Route::post('/', 'EdController@create');
    });

    Route::get('attrs', 'AttributeController@index');

    Route::prefix('nsi')->group(function () {
        Route::get('sources', 'SourceController@index');
        Route::get('file_roles', 'FileRoleController@index');
        Route::get('file_extensions', 'FileExtensionController@index');
    });
});

Route::fallback(function () {
    return response()->json([
        'status' => false,
        'message' => 'Page Not Found1.',
    ], 404);
});
