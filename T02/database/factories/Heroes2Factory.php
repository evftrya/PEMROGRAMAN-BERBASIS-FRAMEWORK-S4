<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Heroes2;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Heroes>
 */
class HeroesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        
        $pilih = ['https://i.pinimg.com/236x/55/ad/a4/55ada43322aea9050c641ed87ca41788.jpg','https://i.pinimg.com/564x/9d/18/4a/9d184a41733dcb4356b7f40d7c546ebd.jpg','https://i.pinimg.com/736x/2a/da/ec/2adaecfc51b409e05c07ab980747e850.jpg','https://i.pinimg.com/736x/52/ce/13/52ce13d4df32b22c975234358de05b69.jpg','https://i.pinimg.com/564x/2c/8c/4c/2c8c4cebca8bc78c65e87cb1566a88e0.jpg','https://i.pinimg.com/564x/6c/e7/fe/6ce7fe8a310f649ed613a500b723decf.jpg','https://i.pinimg.com/564x/95/9a/29/959a29f6f133552e7c07071147c166f5.jpg','https://i.pinimg.com/564x/da/c5/f9/dac5f9814fced1a648e3514fd5d1fe69.jpg','https://i.pinimg.com/736x/6f/02/8b/6f028bbc523513ee386653b021e17099.jpg'];
        $selectPilih = $this->faker->randomElement($pilih);
        $sp = ['Darat','Laut'];
        return [
            'status' => fake()->sentence(2,true),
            'name' => fake()->name(),
            'slogan' => fake()->sentence(7,true),
            'image' => $selectPilih,
            'nih' =>fake()->numerify(10),
            'email' =>fake()->sentence((1).'@'.fake()->sentence(1)),
            'spesialis' => $this->faker->randomElement($sp)
        ];
    }

    
}
