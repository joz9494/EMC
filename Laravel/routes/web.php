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

Route::get('/Contacto',function(){
	return view('Contacto');
});

Route::get('/Acerca_de_EMC',function(){
	return view("Acerca");
});

Route::get('/Servicios',function(){
	return view('Servicios');
});

Route::get('/Tratamientos',function(){
	return view('Tratamientos/Tratamientos');
});

Route::get('Biocell',function(){
	return view('Biocell');
});

Route::get('/Opera_tratamiento_antiaging',function(){
	return view('/Tratamientos/Opera_tratamiento');
});

Route::get('/Hormonas',function(){
	return view('/Tratamientos/Hormonas2');
});
Route::get('/Peptonas',function(){
	return view('/Tratamientos/Peptonas');
});