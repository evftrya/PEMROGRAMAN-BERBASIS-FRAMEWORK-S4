<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hero;

class navbarControllers extends Controller
{
    public function cals(){
        $string='';
        for ($i= 0; $i < Hero::PjgHeroes(); $i++) {
            $hero = Hero::getData($i);
            $string.='<li><a href="{{"'.$hero[4].'"}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>'.$hero[0].'</span></a></li>';
        }

        return $string;
    }
}
