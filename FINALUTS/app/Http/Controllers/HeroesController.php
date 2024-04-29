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
            //jika foto kosong
            $val['image'] = "'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg'";
        }
        
        
        
        
        $hero = new Heroes;
        $hero->name = $val['name'];
        $hero->status = $val['status'];
        $hero->slogan = $val['slogan'];
        $hero->image = $val['image'];
        //default image link
        $hero->spesialis = $val['spesialis'];
        $hero->email = $val['email'];
        $hero->nih = $val['nih'];

        if($val['check']==='file'){
            $oriName = "null";
            try {
                // dd($request->file('images'));
                if($request->file('images')==null){
                    //jika foto kosong
                    $hero->image = "'https://i.pinimg.com/564x/07/c3/31/07c331847fd83cb876f9d89299784880.jpg'";
                }
                else{
                    //jika foto file
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
                //save foto ke direktori lokal
            }
        }
        

        // return $index->forNew();
        return redirect('/Others');
    }

    public function update($id, Request $req, Others $contOthers){
        // dd($req->images);
        // dd($req);
        $val = $req->validate([
            'name'      => 'required',
            'status'    => 'required',
            'slogan'    => 'required',
            'image' => 'nullable',
            'images'=>'nullable',
            'cekUbah' => 'nullable',
            'deffoto' => 'nullable',
            'check' => 'nullable',
            'nih'   => 'required',
            'email' => 'required',
            'spesialis' => 'required'
        ]);


        // dd($val['deffoto']);
        $hero = Heroes::firstWhere('id',$id);
        $hero->name     = $val['name'];
        $hero->status   = $val['status'];
        $hero->slogan   = $val['slogan'];
        $hero->nih      = $val['nih'];
        $hero->email    = $val['email'];
        $hero->spesialis= $val['spesialis'];
        // $hero->image = $val['deffoto'];
        $dName=null;
        if($req->cekUbah==='ubah'){
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
            else{
                $hero->image = $req->image;
            }
            
            
        }
        
        else{
            $hero->image = $val['deffoto']; 
        }
        // dd($hero);
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
            if(strpos($req->deffoto,"http")!==true){
                // dd('tidak ada http');
                $Path = 'public/assets/img/'.$req->deffoto;
                // dd($Path);
                if(Storage::exists($Path)){
                    // dd("ada fotonya");
                    Storage::delete($Path);
                }
    
            }
        }
        
        // return $contOthers->forEdit($hero->id);
        // dd('/Others/Detail/'.$hero->status);
        return redirect('/Others/Detail/'.$hero->status);
    }

    public function destroy($id,Heroes $hero,Index $index){
        $hero = Heroes::firstWhere('id',$id);
        $hero->delete();

        if(strpos($hero->image,"http")!==true){
            // dd('tidak ada http');
            $Path = 'public/assets/img/'.$hero->image;
            // dd($Path);
            if(Storage::exists($Path)){
                // dd("ada fotonya");
                Storage::delete($Path);
            }

        }
        // return $index->forOthers();
        return redirect('/Others');
    }
}
