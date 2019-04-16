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
	$agent = new Agent();
	if ($agent->isMobile())
		return view ('Movil/Tratamientos/Opera');
	else
	return view('/Tratamientos/Opera_tratamiento');
});

Route::get('/Hormonas',function(){
	$agent = new Agent();
	if ($agent->isMobile())
		return view('/Movil/Tratamientos/HormonasBio');
	else
	return view('/Tratamientos/Hormonas2');
});
Route::get('/Peptonas',function(){
	$agent = new Agent();
	if ($agent->isMobile())
		return view ('/Movil/Tratamientos/Peptonas');
	return view('/Tratamientos/Peptonas');
});
Route::get('/lift-biologico',function(){
	$agent=new Agent();
	if($agent->isMobile())
		return view('/Movil/Tratamientos/lift-biologico');
	else
	return view('/Tratamientos/lift-biologico');
});
Route::get('/PRP4G',function(){
	$agent = new Agent();
	if ($agent->isMobile())
		return view ('Movil/Tratamientos/Prp4g');
	else
	return view('/Tratamientos/PRP4G');
});

Route::get('/Rinomodelacion',function(){
	$agent = new Agent();
	if ($agent->isMobile())
		return view ('Movil/Tratamientos/Rinomodelacion');
	else
	return view('/Tratamientos/Rinomodelacion');
});


Route::get('/Terapia_Neural',function(){
	$agent = new Agent();
		if($agent->isMobile())
			return view('Movil/Tratamientos/Terapia_Neural');
		else
			return view ('/Tratamientos/Terapia_Neural');
});
Route::get('/scultur_refort',function(){
	$agent = new Agent();
		if($agent->isMobile())
			return view('Movil/Tratamientos/scultur_refort');
		else
			return view ('/Tratamientos/scultur_refort');
});


Route::get('/Tratamiento_progresivo_de_ojos',function(){
	$agent = new Agent();
	if ($agent->isMobile())
		return view ('/Tratamientos/Tratamiento_ojos');
	else
		return view('/Tratamientos/Tratamiento_ojos');
});


Route::get('/Scultur_Refort',function(){
	$agent = new Agent();
	if($agent->isMobile())
		return view ('/Tratamientos/Scultur_refort');
	else
		return view('/Tratamientos/Scultur_refort');
});


Route::get('/Silicio_plus_DMAE',function(){
	$agent = new Agent();
	if($agent->isMobile())
		return view ('/Movil/Tratamientos/Silicio');
	else
		return view('/Tratamientos/Silicio');
});

