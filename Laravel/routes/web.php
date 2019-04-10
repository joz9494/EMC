<?php

use Jenssegers\Agent\Agent;
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
	$menuvale=1;
	$agent = new Agent();
	if($agent->isMobile())
		return view('/Movil/welcome');
	else
    	return view('welcome',compact($menuvale));
});

Route::get('/Contacto',function(){
	$agent=new Agent();
	if($agent->isMobile())
		return view('/Movil/Contacto');
	else
	return view('Contacto');
});

Route::get('/Biocell',function(){
	return view('Biocell');
});

Route::get('/Acerca_de_EMC',function(){
	
	$agent = new Agent();
	if($agent->isMobile())
		return view('Movil/Acerca');
	else
		return view("Acerca");
});

Route::get('/Servicios',function(){
	$agent = new Agent();
	if($agent->isMobile())
		return view('Movil/Servicios');
	else
		$menuvale=2;
		return view('Servicios',compact($menuvale));
});

Route::get('/Tratamientos',function(){
	$agent = new Agent();
	if($agent->isMobile())
		return view('Movil/Tratamientos');
	else
		return view('Tratamientos');
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
Route::get('/lift-biologico',function(){
	return view('/Tratamientos/lift-biologico');
});
Route::get('/PRP4G',function(){
	return view('/Tratamientos/PRP4G');
});