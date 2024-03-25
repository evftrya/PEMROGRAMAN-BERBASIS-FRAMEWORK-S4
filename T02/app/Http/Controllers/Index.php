<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class Index extends Controller
{
    
    
    public function forIndex(){
        $hero = Hero::getData(0);
        return view('Index',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Hero::getAll()]);
    }

    public function forIronMan(){
        $hero = Hero::getData(1);
        return view('IronMan',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Hero::getAll()]);
    }

    public function forThor(){
        $hero = Hero::getData(2);
        return view('Thor',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Hero::getAll()]);
    }

    public function forDoctorStrange(){
        $hero = Hero::getData(3);
        return view('DoctorStrange',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Hero::getAll()]);
    }
    
}
