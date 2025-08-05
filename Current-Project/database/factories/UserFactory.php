<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function suspended()
{
    return $this->state(function (array $attributes) {
        return [
            'status' => 'suspended',
        ];
    });
}


    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

    public function prepared():static{
         return $this->state(fn(array $attributes)=>[

            'name'=>null,
         ]);
    }

    public function admin(){
        return $this->state(function (array $attributes){
            return [
                'name'=>"Admin"
            ];
        });
    }
    // fn = function syntex is the same as function(params){ }
}
