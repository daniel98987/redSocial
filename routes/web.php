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

Route::get('/', function () {
    return view('principal');
});
Route::get('/amigos', function () {

    // $data['dato']=['photo' => 'emo.png','felicidad.png','foto.png', 'nombres' => 'Ricardo Ernesto','Juan Ernesto','Jhoan Alexander'
    // ,'apellidos' => 'Solarte Rosero','Mora Benavides','Perez Rodriguez'];

    $data['dato']=[
        
        array('Ricardo Ernesto','Solarte Rosero','bebe.png'),
        array('Juan Ernesto','Mora Benavides','felicidad.png'),
        array('Jhoan Alexander','Perez Rodriguez','foto.png'),
        
        
        
        
 ];
    return view('amigos',$data);
});
Route::get('/grupos', function () {
  
    return view('grupos');
});
