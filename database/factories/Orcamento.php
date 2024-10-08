<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cliente' => fake()->cliente(),
            'datahoraorcamento' => fake()->now(),
            'vendedor' => fake()->vendedor(),
            'descricao' => fake()->descricao(),
            'valororcado'  => fake()->valororcado(),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    //public function unverified(): static
    //{
      //  return $this->state(fn (array $attributes) => [
        //    'email_verified_at' => null,
       // ]);
   // }
}
