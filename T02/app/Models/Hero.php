<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{

    // ['status'=>'','name'=>'','slogan'=>'','image'=>'','link'=>]
    private static $TheHeroes = [['status'=>'All','name'=>'Avengers','slogan'=>'Marvel Cinematic Univers','image'=>'https://i.pinimg.com/564x/60/b6/8f/60b68f2100f43297952a7c09690cf397.jpg','link'=>'/Avg'],
    ['status'=>'My Second Father','name'=>'Tony Stark','slogan'=>'"The truth is... I am Iron Man"','image'=>'https://i.pinimg.com/564x/8b/13/a4/8b13a4323fe920169ba4d0c7696c2719.jpg','link'=>'/im'],
    ['status'=>'My Third Father','name'=>'Thor Odinson','slogan'=>"He's Adopted",'image'=>'https://i.pinimg.com/564x/a6/d3/6d/a6d36df1c40a3908b31542a12968a87b.jpg','link'=>'/t'],
    ['status'=>'My Uncle','name'=>'Stephen Vincent Strange','slogan'=>"Dormamu,''=> I've Come To Bargain!",'image'=>'https://i.pinimg.com/564x/85/03/31/8503318a0dedea425e74a536b6585e96.jpg','link'=>'/ds']
    ];

    private static $others = [
    ['status'=>'MyBoyfriend','name'=>'Spiderman','slogan'=>'With Great Power Comes Great Responsibility','image'=>'https://i.pinimg.com/564x/47/4a/85/474a8529258b16a3a2e14a91cba2a6ee.jpg','link'=>'/Others/Spiderman'],
    ['status'=>'MyOunty','name'=>'Black Widow','slogan'=>'See you in a minute','image'=>'https://i.pinimg.com/564x/c7/19/ef/c719efa2fba64fc1e351635016f68a25.jpg','link'=>'/Others/BlackWidow'],
    ['status'=>'MyMommy','name'=>'Wanda','slogan'=>'I dont need you to tell me Who I Am','image'=>'https://i.pinimg.com/564x/33/04/a2/3304a2d48e1e6e630762234285e2b3fc.jpg','link'=>'/others/Wanda']
    ];
    public static function getData($theHero){
        $back = [];
        for($i=0;$i<count(self::$TheHeroes);$i++){
            if($theHero==$i){
                $back = self::$TheHeroes[$i];
            }
        }
        return $back;
    }

    public static function getAll(){
        return self::$TheHeroes;    
    }

    public static function PjgHeroes(){
        return count(self::$TheHeroes);
    }

    public static function getOthers(){
        return self::$others;
    }

    public static function find($status){
        $back = null;
        $hero = self::getOthers();
        for($i=0;$i<count($hero);$i++){
            if($hero[$i]['status']===$status){
                $back = $hero[$i];
            }
        }
        return $back;
    }

}
