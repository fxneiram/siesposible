<?php

use App\Models\IntencionVoto;
use Illuminate\Database\Seeder;

class IntencionVotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IntencionVoto::create([
            'name' => 'NINGUNA'
        ]);

        IntencionVoto::create([
            'name' => 'BAJA'
        ]);

        IntencionVoto::create([
            'name' => 'MEDIA'
        ]);

        IntencionVoto::create([
            'name' => 'ALTA'
        ]);

        IntencionVoto::create([
            'name' => 'COMPLETA'
        ]);
    }
}
