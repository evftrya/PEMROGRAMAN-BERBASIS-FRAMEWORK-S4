<?php

use Carbon\Traits\ToStringFormat;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Index;
use App\Models\Hero;
use App\Http\Controllers\navbarControllers;
use App\Http\Controllers\Others;

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

Route::get('/', [Index::class, 'forIndex']);
Route::get('/im', [Index::class, 'forIronMan']);
Route::get('/t', [Index::class, 'forThor']);
Route::get('/ds', [Index::class, 'forDoctorStrange']);
// Route::get('/b', [navbarControllers::class, 'cals'])->name('nbr');
Route::get('/Others',function(){
    return view('Others',['others'=>Hero::getOthers(),'navbar'=>Hero::getAll()]);
});
Route::get('/Others/Detail/{status}', [Others::class, 'getOthersCon'])->name('Detail');



// Route::get('/', function () {
//     return Hero::getData(0)[1];
// });

// Route::get('/', [navbarControllers::class, 'cals']);


// Route::get('/tahun',[Index::class, 'forTry'] );