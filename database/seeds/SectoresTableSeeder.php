<?php

use App\Models\Sector;
use Illuminate\Database\Seeder;

class SectoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sector::create([
            'name' => 'CULTURA'
        ]);

        Sector::create([
            'name' => 'COMERCIO'
        ]);

        Sector::create([
            'name' => 'DEPORTE'
        ]);

        Sector::create([
            'name' => 'SALUD'
        ]);

        Sector::create([
            'name' => 'SENA'
        ]);

        Sector::create([
            'name' => 'IGLESIAS'
        ]);
    }
}
