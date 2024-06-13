<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nom_proveedores' => $this->faker->company,
            'RUC_proveedores' => $this->faker->numerify('##########'),
            'Telf_proveedores' => $this->faker->phoneNumber,
            'Correo_proveedores' => $this->faker->unique()->safeEmail,
        ];
    }
}
