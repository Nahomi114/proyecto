<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('proveedores')->insert([
            'Nom_proveedores' => 'Proveedor Ejemplo',
            'RUC_proveedores' => Str::random(10),
            'Telf_proveedores' => Str::random(9),
            'Correo_proveedores' => Str::random(10).'@example.com',
        ]);
    }
}
