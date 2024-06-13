<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'Nom_cliente' => $this->faker->firstName,
            'Ape_cliente' => $this->faker->lastName,
            'Tipo_documento' => $this->faker->randomElement(['DNI', 'Pasaporte', 'Carnet de extranjería']),
            'DNI_cliente' => $this->faker->unique()->numerify('##########'),
            'Cel_cliente' => $this->faker->unique()->numerify('9########'),
            'Correo_cliente' => $this->faker->unique()->safeEmail,
        ];
    }
}
