<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Heroes;
use App\Http\Controllers\Index;
use App\Http\Controllers\Others;
use Exception;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;

class HeroesController extends Controller
{
    public function index(){
        $hero = Heroes::orderBy('id','desc')->paginate(5);
        return view('tes',['foto'=>$hero['image'],'nama'=>$hero['name'],'theSlogan'=>$hero['slogan'],'navbar'=>Heroes::getAll(),compact('hero')]);
    }
    public function store(Request $request, Index $index){
        // dd($request->images);

        $val = $request->validate([
            'name'  => 'required',
            'status'=> 'required',
            'slogan'=> 'required',
            'image' => 'nullable',
            'images'=> 'nullable',
            'check' => 'required',
            'nih'   =>  'required',
            'email' => 'required',
            'spesialis' =>'required'
        ]);

        // dd($request);
        // dd($request->hasFile('image'));
        // dd($val);
        // dd($val);
        // dd($request);
        // dd($val['image']);
        // dd($val['images']);
        if(empty($val['images']) && empty($val['image'])){
            $val['image'] = "'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg'";
        }
        
        
        
        
        $hero = new Heroes;
        $hero->name = $val['name'];
        $hero->status = $val['status'];
        $hero->slogan = $val['slogan'];
        $hero->image = $val['image'];
        $hero->spesialis = $val['spesialis'];
        $hero->email = $val['email'];
        $hero->nih = $val['nih'];

        if($val['check']==='file'){
            $oriName = "null";
            try {
                // dd($request->file('images'));
                if($request->file('images')==null){
                    $hero->image = "'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg'";
                }
                else{
                    $file = $request->file('images');
                    $oriName = time().'.'.$file->extension();
                    // $file->move(public_path('public\assets\img'),$oriName);
                    $hero->image = $oriName;
                    // dd($oriName);
                    // dd($hero);
                }
                
            } catch (Exception $e) {
                
            }
            
            // dd($hero);
        }
        // dd($hero);
        $theID = count(Heroes::all())+1;
        // $theID = 27;
        // dd($theID);
        
        // dd(Heroes::find($theID));
        
        try {
            if(Heroes::findorfail($theID)->id===$theID){
                $hero->id=Heroes::getMaxID()+1;
            }
        } catch (Exception $th) {
            $hero->id = $theID;
        }
        // dd($hero);
        // $hero->id = $val['id'];
        // dd($hero->image);
        // dd(gettype($hero->image));
        
        $hero->save();
        // dd($val);
        if($request->file('images')!=null){
            if($val['check']==='file'){
                $dName = $oriName;
                // dd($dName);
                // $request->images->storeAs('images', $dName,'public');
                $request->file('images')->storeAs('/assets/img',$dName,'public');
            }
        }
        

        return $index->forNew();
    }

    public function show(Heroes $heroes){
        return view('hero.show',compact('hero'));
    }

    // public function edit(Heroes $heroes){
    //     return view('hero.edit',compact('hero'));
    // }

    public function update($id, Request $req, Others $contOthers){
        // dd($req->images);
        
        $val = $req->validate([
            'name'      => 'required',
            'status'    => 'required',
            'slogan'    => 'required',
            'image' => 'nullable',
            'images'=>'nullable',
            'cekUbah' => 'nullable',
            'deffoto' => 'nullable',
            'check' => 'nullable'
        ]);


        // dd($val['deffoto']);
        $hero = Heroes::firstWhere('id',$id);
        $hero->name = $val['name'];
        $hero->status = $val['status'];
        $hero->slogan = $val['slogan'];
        // $hero->image = $val['deffoto'];
        $dName=null;
        if($req->cekUbah=='ubah'){
            if(empty($val['images']) && empty($val['image'])){
                $val['image'] = "'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg'";
                $hero->image = $val['image'];
            }
            
            else if($val['check']==='file'){
                $oriName = "null";
                // dd($oriName);
                try {
                    // dd($request->file('images'));
                    // dd($req->file('images')==null);
                    if($req->file('images')==null){
                        $hero->image = "'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg'";
                    }
                    else{
                        $file = $req->file('images');
                        $oriName = time().'.'.$file->extension();
                        $dName=$oriName;
                        // $file->move(public_path('public\assets\img'),$oriName);
                        $hero->image = $oriName;
                        // dd($oriName);
                        // dd($hero);
                    }
                    
                } catch (Exception $e) {
                    
                }
                
                // dd($hero);
            }
            
            
        }
        
        else{
            $hero->image = $val['deffoto']; 
        }
        
        $hero->save();
        if($req->cekUbah=='ubah'){
            if($req->file('images')!=null){
                if($val['check']==='file'){
                    // dd($dName);
                    // dd($dName);
                    // $request->images->storeAs('images', $dName,'public');
                    $req->file('images')->storeAs('/assets/img',$dName,'public');
                }
            }
        }
        return $contOthers->forEdit($hero->id);
    }

    public function destroy($id,Heroes $hero,Index $index){
        $hero = Heroes::firstWhere('id',$id);
        $hero->delete();
        return $index->forOthers();
    }
}
