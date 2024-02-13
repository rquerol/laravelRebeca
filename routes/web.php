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



// Route::get('ei/', function () {
//     $data["nom"]="guio";
//     return view('hola',$data);
// } )->name("index");

Route::get('/', function () {
    return view('hola');
})->name("index");

Route::get('/greeting', function () {
    return 'Hello World';
});

Route::post('ei/', [App\Http\Controllers\SaludoController::class,'inicio'] );