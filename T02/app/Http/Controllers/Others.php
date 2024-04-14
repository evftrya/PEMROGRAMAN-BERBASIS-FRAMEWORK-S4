<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heroes;

class Others extends Controller
{
    public function getOthersCon($status){
        
        $hero = Heroes::find($status);
        return view('Detail',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Heroes::getAll()]);
        // return $status;
    }

    public function forEdit($id){
        $hero = null;
        $heroes = Heroes::all();
        foreach($heroes as $back){
            if($back['id']==$id){
                $hero = $back;
            }
        }
        return view('edit',['foto'           =>'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg',
                            'nama'          =>'Edit Hero',
                            'theSlogan'     =>'Masukkan Detil Hero',
                            'navbar'        =>  Heroes::getAll(),
                            'put'           => 'put',
                            'inama'         => $hero->name,
                            'istatus'       => $hero->status,
                            'ifoto'         => $hero->image,
                            'islogan'       => $hero->slogan,
                            'id'            => $hero->id]);
    }

    
}
