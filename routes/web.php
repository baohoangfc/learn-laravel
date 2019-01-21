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

//Query Builder

Route::get('query/all', function(){
    $data = DB::table('product')->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
    //trả về giá trị là object
});
Route::get('query/select', function(){
    $data = DB::table('product')->select('name')->where('id',4)->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
    //trả về giá trị là object với thuộc tính mong muốn
});
Route::get('query/compare', function(){
    $data = DB::table('product')->where('id',2)->orWhere('price',13)->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
    //trả về giá trị là object
});
Route::get('query/orderby', function(){
    $data = DB::table('product')->orderBy('id','DESC')->get();
    echo "<pre>";
    print_r($data);
    echo "<pre>";
    //trả về giá trị là object
});

//Eloquent ORM
Route::get('model/select-all', function(){
    $data = App\Product::all()->tojSon();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
});
Route::get('model/select-id', function(){
    $data = App\Product::findOrFail(7)->tojSon();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
});
Route::get('model/where', function(){
    $data = App\Product::where('price', 23)->get();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    //where luôn luôn đi với get nếu không sẽ bị load dữ liệu lâu
});
Route::get('model/where1', function(){
    $data = App\Product::where('price', 23)->take(2)->get();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    //where luôn luôn đi với get nếu không sẽ bị load dữ liệu lâu
});
//lấy 1 cột dữ liệu đặt select trước ->get()
Route::get('relation/one-many', function(){
    $data = App\Product::find(2)->images()->get()->toArray();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    //where luôn luôn đi với get nếu không sẽ bị load dữ liệu lâu
});
Route::get('relation/one-many2', function(){
    $data = App\Images::find(1)->product()->get()->toArray();
    echo '<pre>';
    print_r($data);
    echo '</pre>';
    //where luôn luôn đi với get nếu không sẽ bị load dữ liệu lâu
});

Route::get('auth/login', ['uses'=>'ThanhVienController@getLogin'])->name('getLogin');
Route::post('auth/login',['uses'=>'ThanhVienController@postLogin'])->name('postLogin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('authen/getRegister',['uses'=>'Auth\RegisterController@getRegister'])->name('getRegister');
Route::post('authen/postRegister',['uses'=>'Auth\RegisterController@postRegister'])->name('postRegister');