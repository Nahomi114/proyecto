<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        Usuario::factory()->count(10)->create();

     
        Usuario::factory()->create([
            'Nom_usuarios' => 'Test User',
            'Email_usuarios' => 'test@example.com',
            'Login_usuarios' => 'testuser',
            'Password_usuarios' => bcrypt('password'), 
            'Estado_usuarios' => 'activo',
        ]);
    }
}
