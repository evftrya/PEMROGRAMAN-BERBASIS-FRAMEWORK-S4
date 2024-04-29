<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heroes;

class Others extends Controller
{
    public function getOthersCon($status){
        
        $hero = Heroes::find($status);
        // $back="apani";
        if(strpos($hero['image'],"http")!==false){
            $back=$hero['image'];
            // dd($back);
        }
        else{
            // /assets/css/TheStyle.css
            // $back = '/storage/images/'.$hero['image'];
            // $back = asset('images/'.$hero['image']);
            $back = 'http://127.0.0.1:8000/storage/assets/img/'.$hero['image'];
            // dd($back);
            // dd("tes");
            // dd($back);
            // return dd($back);
        }
        // return dd($back);
        // dd($hero);
        return view('Detail',['foto'=>$back,'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Heroes::getAll()]);
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
