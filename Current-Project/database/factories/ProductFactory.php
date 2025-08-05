<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->word(),
            'image'=>'images/default.jpg',
            'category_id'=>$this->faker->randomElement([1,2]),
            
            'price'=>$this->faker->randomFloat(2,5,90)
        ];
    }

    public function changename():static{
        return $this->state(fn(array $attributes) =>[

            "name"=>"something"

        ]);
    }
}
