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
    return view('main',['tokoh'=>'Tugas01','slogan'=>'We Are Heroes','photo'=>"allhero.jpg"]);
});

Route::get('/ironMan', function () {
    return view('ironMan',['tokoh'=>'IronMan','slogan'=>'"Are you Tony.... Stank?"','photo'=>"ironman.jpg"]);
});

Route::get('/Thor', function () {
    return view('Thor',['tokoh'=>'Thor','slogan'=>'Hey lets do "Get Help"','photo'=>"thor.jpg"]);
});

Route::get('/ds', function () {
    return view('ds',['tokoh'=>'Doctor Strange','slogan'=>'I Love You In Every Universe"','photo'=>"doctor.jpg"]);
});
