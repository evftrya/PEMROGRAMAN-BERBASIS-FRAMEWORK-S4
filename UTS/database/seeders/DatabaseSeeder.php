<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Heroes;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // theMcu::create([
        //     'id'            =>'9',
        //     'nameKarakter'   =>'Captain Amerika',
        //     'earth'         =>'818'
        // ]);

        // theMcu::create([
        //     'id'            =>'8',
        //     'nameKarakter'   =>'Thanos',
        //     'earth'         =>'818'
        Heroes::factory(20)->create();
        // ]);

        

    }
}
