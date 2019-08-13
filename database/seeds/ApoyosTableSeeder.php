<?php

use App\Models\Apoyo;
use Illuminate\Database\Seeder;

class ApoyosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Apoyo::create([
            'name' => 'Botes'
        ]);
        Apoyo::create([
            'name' => 'Carros'
        ]);
        Apoyo::create([
            'name' => 'Voladoras'
        ]);
        Apoyo::create([
            'name' => 'Lanchas'
        ]);
        Apoyo::create([
            'name' => 'Casas'
        ]);
        Apoyo::create([
            'name' => 'Motores'
        ]);
        Apoyo::create([
            'name' => 'Motocarros'
        ]);
        Apoyo::create([
            'name' => 'Publicida pagar'
        ]);
        Apoyo::create([
            'name' => 'Trabajo Publicidad'
        ]);
        Apoyo::create([
            'name' => 'Sedes'
        ]);
        Apoyo::create([
            'name' => 'Acarreos'
        ]);
        Apoyo::create([
            'name' => 'Testigo'
        ]);

    }
}
