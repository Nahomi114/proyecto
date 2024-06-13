<?php

namespace Database\Factories;

use App\Models\TipoUsuario;
use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;

class UsuarioFactory extends Factory
{
    protected $model = Usuario::class;

    public function definition(): array
    {
        return [
            'ID_tipo_usuario' => TipoUsuario::factory(),
            'Nom_usuarios' => $this->faker->name,
            'Telefono_usuarios' => $this->faker->phoneNumber,
            'Email_usuarios' => $this->faker->safeEmail,
            'Login_usuarios' => $this->faker->unique()->userName,
            'Password_usuarios' => Hash::make('password'), 
            'Estado_usuarios' => $this->faker->randomElement(['activo', 'inactivo']),
        ];
    }
}
