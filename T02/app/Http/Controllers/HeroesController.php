<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heroes;
use App\Http\Controllers\Index;
use App\Http\Controllers\Others;

class HeroesController extends Controller
{
    public function index(){
        $hero = Heroes::orderBy('id','desc')->paginate(5);
        return view('tes',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Heroes::getAll(),compact('hero')]);
    }
    public function store(Request $request, Index $index){
        // dd($request->all());

        $val = $request->validate([
            'name'  => 'required',
            'status'=> 'required',
            'slogan'=> 'required',
            'image' => 'nullable'
        ]);

        if(empty($val['image'])){
            $val['image'] = "'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg'";
        }
        
        $theID = count(Heroes::all())+1;
        $temp = Heroes::findOrFail($theID);
        $val['id'] = $theID;
        if($temp->id===$theID){
            $val['id']=Heroes::getMaxID()+1;
        }
        $hero = new Heroes;
        $hero->name = $val['name'];
        $hero->id = $val['id'];
        $hero->status = $val['status'];
        $hero->slogan = $val['slogan'];
        $hero->image = $val['image'];
        // dd($hero);
        $hero->save();


        return $index->forNew();
    }

    public function show(Heroes $heroes){
        return view('hero.show',compact('hero'));
    }

    public function edit(Heroes $heroes){
        return view('hero.edit',compact('hero'));
    }

    public function update($id, Request $req, Others $contOthers){
        
        $val = $req->validate([
            'name'      => 'required',
            'status'    => 'required',
            'slogan'    => 'required',
            'image' => 'nullable'
        ]);

        $hero = Heroes::firstWhere('id',$id);
        $hero->name = $val['name'];
        $hero->status = $val['status'];
        $hero->slogan = $val['slogan'];
        
        if(empty($val['image'])){
            $val['image'] = "'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg'";
        }
        $hero->image = $val['image'];
        $hero->save();

        return $contOthers->forEdit($hero->id);
    }

    public function destroy($id,Heroes $hero,Index $index){
        $hero = Heroes::firstWhere('id',$id);
        $hero->delete();
        return $index->forOthers();
    }
}
