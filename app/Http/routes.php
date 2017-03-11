<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('hello-world', function () {
	return 'hello world';
});

Route::get('pengguna/{pengguna}', function ($pengguna) {
	return "hello world dari pengguna $pengguna";
});

Route::get('kelasd2/framework/{mhs?}', function ($mhs="jali") {
	return "SELAMAT DATANG $mhs";
});