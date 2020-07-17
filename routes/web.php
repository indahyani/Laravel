<?php

use Illuminate\Support\Facades\Route;

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
/*get : mengirim data : post*/
Route::get('/', function () {
    return view('welcome');//menampilkan view yang namanya welcome yang ada di resource views
});

/*get : bisa nampilin dan mengirim data, kalau nggak ada inputan nggak papa
	post : datanya harus ada, kalau nggak ada nnti eror , biasanya insert
	put : put sebuah data, pengiriman data kedatabase, ini bagian upadate
	pacth : 
	delete : 
	match : misal kita membuat dua route yang sama namun berbeda post atau getnya
	any : 
*/
Route::get('/test/{id}/{name}', function($id,$name)
	/*?id={id}&name={name} berguna untuk menampilkan data id dan nama*/
	{
	//ini yang akan tampil
	return "id = " . $id ." Nama = ". $name;
});


Route::redirect('/test,'/',301)

