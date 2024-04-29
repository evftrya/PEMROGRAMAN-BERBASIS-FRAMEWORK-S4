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
    //         "id" => 1
    // "created_at" => "2024-04-29 02:55:56"
    // "updated_at" => "2024-04-29 02:55:56"
    // "status" => "Sed quis."
    // "name" => "Dr. Van Moen"
    // "slogan" => "Et corporis perferendis saepe vel."
    // "image" => "https://i.pinimg.com/564x/2c/8c/4c/2c8c4cebca8bc78c65e87cb1566a88e0.jpg"
    // "nih" => "Nihil quasi dolorum id temporibus qui sunt."
    // "email" => "A eius."
    // "spesialis" => "Laut"
        }
        // return dd($back);
        // dd($hero);
        return view('Detail',['foto'=>$back,'hero'=>$hero,'navbar'=>Heroes::getAll()]);
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
        $satu ='';
        $dua ='';
        
        // dd($hero);
        return view('edit',['foto'           =>'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg',
                            'nama'          =>'Edit Hero',
                            'theSlogan'     =>'Masukkan Detil Hero',
                            'navbar'        =>  Heroes::getAll(),
                            'put'           => 'put',
                            'inama'         => $hero->name,
                            'istatus'       => $hero->status,
                            'ifoto'         => $hero->image,
                            'islogan'       => $hero->slogan,
                            'id'            => $hero->id,
                            'inih'          => $hero->nih,    
                            'iemail'        => $hero->email,
                            'ispesialis'    => $hero->spesialis]);
    }

    
}
