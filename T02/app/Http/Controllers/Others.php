<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class Others extends Controller
{
    public function getOthersCon($status){
        $hero = Hero::find($status);
        return view('Detail',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Hero::getAll()]);
        // return $status;
    }
}
