<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

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

#Exercício 2

Route::get('/ex2', function (){
    return view('lista.ex2');
});

Route::post('/listaex2', function(Request $request){
    $valor1 = intval($request->input('temperatura1'));
    $calculo = ($valor1 * 1.8) + 32;
    return view('lista.ex2', compact('calculo'));
});

#Exercício 3

Route::get('/ex3', function (){
    return view('lista.ex3');
});

Route::post('/listaex3', function(Request $request){
    $valor1 = intval($request->input('fahrenheit'));
    $calculo = (5 / 9) * ($valor1 - 32);
    return view('lista.ex3', compact('calculo'));
});

#Exercício 4

Route::get('/ex4', function (){
    return view('lista.ex4');
});


Route::post('/listaex4', function(Request $request){
   $valor1 = intval($request->input('largura'));
   $valor2 = intval($request->input('altura'));
   $media = ($valor1 * $valor2);
   return view('lista.ex4', compact('media'));
});

#Exercídio 5

Route::get('/ex5', function (){
    return view('lista.ex5');
});

Route::post('/listaex5', function(Request $request){
    $valor1 = intval($request->input('raio'));
    $area = pi() * pow($valor1, 2);
    return view('lista.ex5', compact('area'));
});

#Exercício 6

Route::get('/ex6', function(){
    return view('lista.ex6');
});

Route::post('/listaex6',function(Request $request){
    $base = intval($request->input('base'));
    $altura = intval($request->input('altura'));
    $perimetro = ($base + $altura) * 2;
    return view('lista.ex6', compact('perimetro'));
});

#Exercício 7

Route::get('/ex7', function (){
    return view('lista.ex7');
});

Route::post('/listaex7', function(Request $request){
    $valor1 = intval($request->input('raio'));
    $perimetro = (2 * (pi())) * $valor1;
    return view('lista.ex7', compact('perimetro'));
});

#Exercício 8

Route::get('/ex8', function(){
    return view('lista.ex8');
});

Route::post('/listaex8',function(Request $request){
    $base = intval($request->input('base'));
    $expoente = intval($request->input('expoente'));
    $calculo = pow($base, $expoente);
    return view('lista.ex8', compact('calculo'));
});

#exercicio 9
Route::get('/ex9', function(){ 
    return view('lista.ex9');
});

Route::post('/listaex9', function(Request $request){ 

    $metros = floatval($request -> input('metros'));
    $centimetros = $metros * 100;
    

    return view('lista.ex9', compact('centimetros')); 
});

#exercicio 10
Route::get('/ex10', function(){ 
    return view('lista.ex10');
});

Route::post('/listaex10', function(Request $request){ 

    $quilometros = floatval($request -> input('quilometros'));
    $milhas = $quilometros * 0.621371;

    return view('lista.ex10', compact('milhas')); 
});

#exercicio 11
Route::get('/ex11', function(){ 
    return view('lista.ex11');
});

Route::post('/listaex11', function(Request $request){ 

    $peso = floatval($request -> input('peso'));
    $altura = floatval($request -> input('altura'));
    $imc = $peso / ($altura * $altura);
    

    return view('lista.ex11', compact('imc')); 
});

#exercicio 12
Route::get('/ex12', function(){ 
    return view('lista.ex12');
});

Route::post('/listaex12', function(Request $request){ 

    $preco = floatval($request -> input('preco'));
    $desconto = floatval($request -> input('desconto'));
    $preco_com_desconto = $preco * (1 - $desconto / 100);

    

    return view('lista.ex12', compact('preco_com_desconto')); 
});

#exercicio 13
Route::get('/ex13', function(){ 
    return view('lista.ex13');
});

Route::post('/listaex13', function(Request $request){ 

    $capital = floatval($request -> input('capital'));
    $taxa = floatval($request -> input('taxa'));
    $periodo = floatval($request -> input('periodo'));
    $juros_simples = $capital * ($taxa / 100) * $periodo;


    return view('lista.ex13', compact('juros_simples')); 
});

#exercicio 14
Route::get('/ex14', function(){ 
    return view('lista.ex14');
});

Route::post('/listaex14', function(Request $request){ 

    $capital = floatval($request -> input('capital'));
    $taxa = floatval($request -> input('taxa'));
    $periodo = floatval($request -> input('periodo'));
    $montante = $capital + ($capital * ($taxa / 100) * $periodo);


    return view('lista.ex14', compact('montante')); 
});

#exercicio 15
Route::get('/ex15', function(){ 
    return view('lista.ex15');
});

Route::post('/listaex15', function(Request $request){ 

    $dias = floatval($request -> input('dias'));
    $horas = $dias * 24;
    $minutos = $dias * 24 * 60;
    $segundos = $dias * 24 * 60 * 60;
    $resultado = "{$horas} horas, {$minutos} minutos, {$segundos} segundos";




    return view('lista.ex15', compact('resultado')); 
});