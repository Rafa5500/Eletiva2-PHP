<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/bem-vindo', function () {
    return "Seja bem vindo!";
});

Route::get('/exer1', function(){
    return view('exer1');
});

Route::post('/exer1resp', function(Request $request){
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma'));
});

Route::get('/ex1', function (){
    return view('lista.ex1');
});


Route::post('/listaex1', function(Request $request){
   $valor1 = intval($request->input('nota1'));
   $valor2 = intval($request->input('nota2'));
   $valor3 = intval($request->input('nota3'));
   $media = (($valor1 + $valor2 + $valor3) / 3);
   return view('lista.ex1', compact('media'));
});