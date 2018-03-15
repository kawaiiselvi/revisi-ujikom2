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
    return view('index');
});
Route::get('/perusahaans', 'LokersController@index')->name('loker');
Route::get('/tips', 'TipsController@index')->name('tip');

Route::get('/tips/index', function () {
    return view('tips.index');
});

Route::get('/register/member', function () {
    return view('auth.member');
});
Route::get('/register/perusahaan', function () {
    return view('auth.perusahaan');
});
Route::post('/register/member', 'DaftarController@member');
Route::post('/register/perusahaan', 'DaftarController@perusahaan');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'=>'admin','middleware'=>['auth','role:admin']], function(){
	Route::resource('pekerjas','PekerjasController');
	Route::resource('perusahaans','PerusahaansController');
	Route::resource('lokers','LokersController');
	Route::resource('karyawans','KaryawansController');
	Route::resource('tips','TipsController');
	Route::resource('komentars','KomentarsController');
});

Route::group(['prefix'=>'member','middleware'=>['auth','role:member']], function(){
	Route::resource('lowongans','LowongansController');
	Route::resource('members','MembersController');
	Route::resource('civis','CivisController');
	Route::get('civi/tambah/{id}', 'CivisController@tambah');
	Route::resource('pekerjas','PekerjasController');
});

Route::group(['prefix'=>'perusahaan','middleware'=>['auth','role:perusahaan']], function(){
	Route::resource('pers','PersController');
	Route::resource('pegawais','PegawaisController');
});

// Route::group(['prefix'=>'member','middleware'=>['auth','role:member']], function(){
// 	Route::resource('lowongans','LowongansController');
// 	Route::resource('pers','PersController');
// });