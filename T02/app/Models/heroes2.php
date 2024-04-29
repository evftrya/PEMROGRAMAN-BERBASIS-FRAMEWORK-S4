<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Heroes2 extends Model
{
    use HasFactory;

    protected $fillable = ['name','status','slogan','image'];
    private static $THs=[];
    
    private static $TheHeroes = [['status'=>'All','name'=>'Avengers','slogan'=>'Marvel Cinematic Univers','image'=>'https://i.pinimg.com/564x/60/b6/8f/60b68f2100f43297952a7c09690cf397.jpg','link'=>'/'],
    ['status'=>'My Second Father','name'=>'Tony Stark','slogan'=>'"The truth is... I am Iron Man"','image'=>'https://i.pinimg.com/564x/8b/13/a4/8b13a4323fe920169ba4d0c7696c2719.jpg','link'=>'/im'],
    ['status'=>'My Third Father','name'=>'Thor Odinson','slogan'=>"He's Adopted",'image'=>'https://i.pinimg.com/564x/a6/d3/6d/a6d36df1c40a3908b31542a12968a87b.jpg','link'=>'/t'],
    ['status'=>'My Uncle','name'=>'Stephen Vincent Strange','slogan'=>"Dormamu,''=> I've Come To Bargain!",'image'=>'https://i.pinimg.com/564x/85/03/31/8503318a0dedea425e74a536b6585e96.jpg','link'=>'/ds']
    ];
    public static function fillDb(){
        self::$THs = json_decode(json_encode(DB::table('Heroes')->get()), true);
    }
    
    public static function getPanjang(){
        //untuk membuat id sesuai
        self::fillDb();
        $back =1;
        $pjg = count(self::$THs);
        if($pjg>=1){
            $back = $pjg+1;
        }
        return $back;
    }

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
        return Heroes2::all();
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

    public static function findId($id){
        $back =null;
        $heroes = Heroes2::all();
        foreach ($heroes as $hero) {
            if($id===$hero->id){
                $back = $hero;
            }
        }
        return $hero;
    }

    public static function thePjg(){
        self::fillDb();
        return count(self::$THs);
    }

    public static function getMaxID(){
        return DB::table('heroes2')->max('id');
    }
}
