<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        App\ruta::create([
            'cod_ruta' => 'r1',
            'nombre_ruta'  => 'Ollanta->Machuppichu',
        ]);

         App\punto::create([
            'cod_punto' => 'ps1',
            'nombre_punto'  => 'Ollanta',
        ]);

        App\hotel::create([
            'cod_hotel' => 'h1',
            'nombre_hotel'  => 'San Agustin',
            'direccion'=>'Urb. San Miguel',
            'telefono'=>'998282892',
            'email'=>'sanAgustin@gmail.com'
        ]);   
    }
}