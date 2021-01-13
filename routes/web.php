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

//Route::get('/', function () {
    //return view('index');
//});

//Route::get('/features', function () {
    //return view('features');
//});

//Route::get('/pricing', function () {
    //$nama_halaman = 'pricing page baru';
    //return view('pricing', ['nama_halaman' => $nama_halaman]);
//});

Route::get('/', 'PagesController@index' );

// Route::get('/', function(){
//     return view('home');
// });

//Login
// Route::get('login',[
//     'uses' => 'LoginController@login',
//     'as' => 'login'
// ]);
// Route::get('cek-login',[
//     'uses' => 'LoginController@ceklogin', //nama controller
//     'as' => 'cek.login' //nama alias
// ]);
// Route::get('user',[
//     'uses' => 'UserController@index', //nama controller
//     'as' => 'user.index' //nama alias
// ]);
// Route::get('user/create',[
//     'uses' => 'UserController@create', //nama controller
//     'as' => 'user.create' //nama alias
// ]);

Route::get('/features', 'PagesController@features' );

Route::get('/donatur', 'DonaturController@index' );
Route::get('/donatur/create', 'DonaturController@create');

Route::get('/riwayat', 'RiwayatController@index' );
Route::get('/search', 'RiwayatController@search');
Route::get('/print_all', 'RiwayatController@print_all');

Route::get('/about', 'AboutController@index' );
Route::get('/syarat', 'SyaratController@index' );
Route::get('/dua', 'DuaController@index' );
Route::get('/jeniszakatmal', 'JenisZakatMalController@index' );
Route::get('/asnaf', 'AsnafController@index' );
Route::get('/hukum', 'HukumController@index' );
Route::get('/hikmah', 'HikmahController@index' );
Route::get('/home', 'PagesController@index' );
Route::get('/wajibmal', 'WajibmalController@index' );
Route::get('/zakatemas', 'ZakatemasController@index' );
Route::get('/berniaga', 'BerniagaController@index' );

Route::get('/muzakkis', 'MuzakkisController@index');
Route::get('/muzakkis/create', 'MuzakkisController@create');
Route::get('/muzakkis/{muzakki}', 'MuzakkisController@show');
Route::post('/muzakkis', 'MuzakkisController@store');

Route::delete('/muzakkis/{muzakki}', 'MuzakkisController@destroy');

Route::get('/muzakkis/{muzakki}/edit', 'MuzakkisController@edit');
Route::patch('/muzakkis/{muzakki}', 'MuzakkisController@update');

// Route::get('/niaga', 'NiagaController@index' );

