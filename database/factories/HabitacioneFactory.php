<?php

namespace Database\Factories;

use App\Models\Habitacione;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Habitacione>
 */
class HabitacioneFactory extends Factory
{

    protected $model = Habitacione::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tipo' =>$this->faker->sentence(),
            'descripcion' =>$this->faker->paragraph(),
            'capacidad' =>$this->faker->randomElement([1, 2, 4]),
            'precio' =>$this->faker->randomElement([1200, 2000, 3200]),
            'ocupacion' =>$this->faker->randomElement([true, false])
        ];
    }
}
