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

    $data = [
        'employes' => [
            "Franco",
            "Peppino",
            "Pino",
            "Gianni"
        ],
    ];


    return view('home', $data);
})->name('home');

Route::get('/ChiSiamo', function () {
    return view('chiSiamo');
})->name('who');

Route::get('/doveSiamo', function () {
    return view('doveSiamo');
})->name('where');

Route::get('/nome', function () {

    $data = [
        'names' => [
            "Franco",
            "Peppino",
            "Pino",
            "Gianni"
        ],
    ];


    return view('nome', $data);
})->name('name');

