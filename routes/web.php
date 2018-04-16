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
use Carbon\Carbon;

Route::get('/tes/{id?}/{nama?}', function ($id,$nama) {
	return "si" .$nama."saya akan pulang tanggal : ".Carbon::now()->addDays($id);
	// return $id.$nama;
	// return Carbon::now() ->addDays($day);
	// $a =1
	// if ($a == 1) {
	// 	return "Benar";
	// } else {
	// 	return "Salah";
	// }
 //    // return view('welcome');
});
 Route::get('/coba/{id}','HomeController@index');
 Route::get('/view','HomeController@view');

 Route::prefix('santri')->group(function() {
	 Route::get('/', 'HomeController@imap_listscan(imap_stream, ref, pattern, content)antri');
	 Route::get('/create', 'HomeController@create');
	 Route::post('/create', 'HomeController@insert');
	 Route::get('/hapus/{id}', 'HomeController@hapus');

	 Route::get('/edit/{id}', 'HomeController@edit');
	 Route::post('/update', 'HomeController@update');
});
 // Route::get('/', function() {
 // 	return view('welcome');
 	
 // // });
 // // Auth::Route();

 // // Route::get('/home');

