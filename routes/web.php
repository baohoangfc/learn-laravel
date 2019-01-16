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
    return view('welcome');
});


Route::get('/sayhello/{name}', function ($name) {
    echo "Hello Laravel : ",$name;
});

Route::get('/hello/{name?}',function($name = 'Bao'){
    echo $name;
});

Route::get('/tong/{id1?}/{id2?}',function($id1 = 1, $id2 = 3){
    echo $id1+$id2;
});

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'product'], function ()    {
        Route::get('1', function(){
            return 1;
        });
        Route::get('2', function(){
            return 2;
        });
    });
});

Route::get('/controller','MyController@getController');
Route::get('/tinhtong/{number1}/{number2}','MyController@tinhtongController');
Route::get('/view','MyController@viewController');
