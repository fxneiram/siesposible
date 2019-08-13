<?php

use App\Models\Lider;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LideresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('liders')->insert([
            'uuid' => 'bfca0ccc-4094-44d5-a839-9878e1d7d88f',
            'nombre' => 'NINGUNO',
            'telefono' => '0000000000',
            'email' => 'ninguno@ninguno.com',
        ]);
    }
}
