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
Route::get('homeUrl', function () {
	return "Ini Route home yang dicek menggunakan url";
});

Route::view('/menu', 'menu');
Route::view('/biodata', 'biodata', ['nama' => 'Indahyani','id' => 123 ,'alamat' => 'Katteong']);

Route::get('/Biodata/{name?}/{age?}/{Address?}', function($name='Indahyani',$age=21,$Address='Katteong')
	/*untuk menampilkan nama age dan address yang dikirim melalui url*/
	{
	//ini yang akan tampil
	return "Nama saya adalah = " . $name ." , saya berumur  ". $age . " Tahun, Alamat  saya di " . $Address; 
}) ;

Route::get('/Biodata/ini/diakses/melalui/nama', function()
	/*untuk menampilkan nama age dan address yang dikirim melalui url*/
	{
	//ini yang akan tampil
	return "Nama = indahyani " ; 
})->name('Bio');

Route::middleware('throttle:5,1')->group(function () {
	Route::get('users/{id}', function($id){
		return " Nama user ke-"  .$id;
	});

});
