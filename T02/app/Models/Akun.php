<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    private static $nama = 'Evi';

    public static function getName(){
        return self::$nama;
    }

    public static function getTahun(){
        return '2004';
    }
}
