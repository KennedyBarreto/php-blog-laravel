<?php

use Illuminate\Support\Facades\Route;

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

    $nome = "Kennedy";
    $arr = [0,1,2,3,4];
    $nomes = ["Kennedy","João","Pedro"];
    return view('welcome', ['nome' => $nome, 'arr'=> $arr, 'nomes'=> $nomes]);
});

Route::get('/contact', function () {
    return view('contact');
});
