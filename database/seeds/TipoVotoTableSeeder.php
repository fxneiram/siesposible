<?php

use App\Models\TipoVoto;
use Illuminate\Database\Seeder;

class TipoVotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TipoVoto::create([
            'name' => 'OPINION'
        ]);

        TipoVoto::create([
            'name' => 'OTRO'
        ]);
    }
}
