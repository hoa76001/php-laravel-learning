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

Route::get('/', function () {
	echo "hh";
    return view('welcome');
});

// truyen tham so tren route
    Route::get('Route/{pram}', function ($pram) {
        echo "Param: " . $pram;
    });

    // dat dieu kien cho tham so truyen len voi phuong thuc where()
    Route::get('Route1/{date}', function ($date) {
        echo "Date: " . $date;
    })->where(['date'=>'[0-9]+']); //a-zA-Z
// dinh danh va nhom cho Route
    Route::get('Route2', ['as'=>'Route3',function () {
        echo "This is Route2";
    }]);
