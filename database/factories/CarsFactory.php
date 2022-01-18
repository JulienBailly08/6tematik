<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CarsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'brand'=> $this->faker->word(),
            'model'=> $this->faker->word(),
            'power'=> $this->faker->numberBetween($min = 75, $max = 455),
            'year'=> $this->faker->year(),
            'pack'=>$this->faker->word(),
            'description' =>$this->faker->paragraph($nbSentences = 3, $variableNbSentences = true),
            'picture'=> $this->faker->imageUrl($width = 640, $height = 480),
            'price'=> $this->faker->randomFloat($nbMaxDecimals =2, $min =1500, $max= 45000)
        ];
    }
}
