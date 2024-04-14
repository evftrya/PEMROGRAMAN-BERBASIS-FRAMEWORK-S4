<?php

use Carbon\Traits\ToStringFormat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Models\Hero;
use App\Http\Controllers\navbarControllers;
use App\Http\Controllers\Others;
use App\Http\Controllers\HeroesController;
use App\Models\Heroes;

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
Route::put('/HeroEdit/{id}',[HeroesController::class,'update'])->name('EditHero');
Route::get('/', [Index::class, 'forIndex']);
Route::get('/im', [Index::class, 'forIronMan']);
Route::get('/t', [Index::class, 'forThor']);
Route::get('/ds', [Index::class, 'forDoctorStrange']);
Route::get('/new', [Index::class, 'forNew']);
Route::get('/edit',[Index::class, 'forEdit']);
Route::get('/Others',[Index::class, 'forOthers']);
Route::get('/Others/Detail/{status}', [Others::class, 'getOthersCon'])->name('Detail');
Route::get('/Others/Edit/{id}', [Others::class, 'forEdit'])->name('Edit');
Route::post('/newHero',[HeroesController::class, 'store']);
Route::get('/Others/Delete/{id}', [HeroesController::class, 'destroy'])->name('Delete');
// Route::get('/', function () {
//     return Heroes::find('tes');
// });

// Route::get('/', function () {
//     return Hero::getData(0)[1];
// });

// Route::get('/', [navbarControllers::class, 'cals']);


// Route::get('/tahun',[Index::class, 'forTry'] );


// Route::resource('newHero',HeroesController::class);
// Route::get('/b', [navbarControllers::class, 'cals'])->name('nbr');
// Route::get('/Others',function(){
    
//     return view('Others',['others'=>Heroes::getOthers(),'navbar'=>Heroes::getAll()]);
// });

// Route::get("/",[Heroes::getPanjang()]);
