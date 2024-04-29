<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heroes;

class Index extends Controller
{
    
    
    public function forIndex(){
        $hero = Heroes::getData(0);
        return view('Index',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Heroes::getAll()]);
    }

    public function forIronMan(){
        $hero = Heroes::getData(1);
        return view('IronMan',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Heroes::getAll()]);
    }

    public function forThor(){
        $hero = Heroes::getData(2);
        return view('Thor',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Heroes::getAll()]);
    }

    public function forDoctorStrange(){
        $hero = Heroes::getData(3);
        return view('DoctorStrange',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Heroes::getAll()]);
    }

    public function forNew(){
        return view('new',['foto'   =>'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg',
                    'nama'          =>'Input New Hero',
                    'theSlogan'     =>'Masukkan Detil Hero Baru',
                    'navbar'        =>  Heroes::getAll(),
                    'what'          => '/newHero',
                    'put'           => 'post',
                    'inama'         => '',
                    'istatus'       => '',
                    'islogan'       => '',
                    'ifoto'         => '' ,
                    'inip'          => '',]);
    }

    public function forOthers(){
        $pjg = count(Heroes::all());
        return view('others',['foto'   =>'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg',
                    'nama'          =>'Others',
                    'theSlogan'     =>'Blip',
                    'navbar'        =>  Heroes::getAll(),
                    'pjg'           =>  $pjg,
                    'others'        =>  Heroes::all()]);
    }



    
    
}
