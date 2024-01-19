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
    $dati = config("fumetti.dati");
    $loghi = config("fumetti.loghi");
    $index = config("fumetti.index");
    return view('home', compact('dati', 'loghi', 'index'));
})->name("home");
