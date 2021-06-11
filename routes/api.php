<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/v1', 'as' => 'api.'], function () {
    Route::group(['prefix' => 'auth', 'namespace' => 'Auth'], function () {
        Route::post('login', 'AuthController@login')->name('api.name');
        Route::post('logout', 'AuthController@logout')->name('api.logout');
        Route::post('refresh', 'AuthController@refresh')->name('api.refresh');
        Route::post('me', 'AuthController@me')->name('api.me');
    });

    Route::apiResource('departments', DepartmentController::class)->only(['index', 'show']);
});

