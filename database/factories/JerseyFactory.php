<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jersey>
 */
class JerseyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $equipo = $this->faker->unique()->randomElement([
            'Real Madrid',
            'Barcelona',
            'Atletico Madrid',
            'Benfica',
            'Valencia',
            'Getafe',
            'Levante',
            'Sevilla',
        ]);

        return [
            'equipos' => $equipo,
            'slug'=> Str::slug('equipos'),
            'descripcion' => $this->faker->unique()->text(20),
            'status' => $this->faker->randomElement([1,2]),
            'category_id' => Category::all()->random()->id,
            'user_id' => User::all()->random()->id

        ];
    }
}
  