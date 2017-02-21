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

Route::get('/beneficiarios', function () { return view('beneficiarios.grid');});
Route::get('/instituciones', function () { return view('instituciones.grid');});
Route::get('/centros', function () { return view('centros.grid');});

//Estas rutas muestran las pantallas de alta
Route::get('/institucion', 'Web\Instituciones\InstitucionesController@create');
Route::put('/institucion/{id?}', 'Web\Instituciones\InstitucionesController@update');
//Route::get('/institucion/{id}', 'Web\Instituciones\InstitucionesController@show');
Route::get('/centro', 'Web\Centros\CentrosController@create');
Route::get('/beneficiario', 'Web\Beneficiarios\BeneficiariosController@create');
Route::get('/beneficiario/{id}', 'Web\Beneficiarios\BeneficiariosController@edit');
Route::get('/beneficiario/{id}/detalle/{detalle}', 'Web\Beneficiarios\BeneficiariosController@edit_detalle');
