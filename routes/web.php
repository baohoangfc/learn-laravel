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

Route::get('/master',function(){
    return view('master');
});
Route::get('/layout',function(){
    return view('layout');
});
Route::get('/sub',function(){
    return view('sub');
});
Route::get('url/full',function(){
    return URL::full();
});
Route::get('url/to',function(){
    return URL::to('/tinhtong', ['Bão','Bụi'],true);
});


//Database
Route::get('schema/create', function(){
    Schema::create('learnphp', function($table){
        $table->increments('id');
        $table->string('tenmonhoc');
        $table->integer('gia');
        $table->text('ghichi')->nullable();
        $table->timestamps();
    });
});
Route::get('schema/create/product', function(){
    Schema::create('product', function($table){
        $table->increments('id');
        $table->string('name');
        $table->integer('price');
        $table->integer('cate_id')->unsigned();
        $table->foreign('cate_id')->references('id')->on('category');
        $table->timestamps();
    });
});
Route::get('schema/rename',function(){
    Schema::rename('learnphp','nhanvien');
});