<?php

use Caffeinated\Shinobi\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::table('roles')->insert([
            'uuid' => 'b1cdda18-b206-4586-aba2-3409c5064ab1',
            'name' => 'Administrador del Sistema',
            'slug' => 'superadmin',
            'description' => '',
            'special' => 'all-access'
        ]);

        DB::table('roles')->insert([
            'uuid' => '48fe181c-066f-4844-b1f2-225fe8e8a12d',
            'name' => 'Administrador',
            'slug' => 'admin',
            'description' => ''
        ]);

        DB::table('roles')->insert([
            'uuid' => '724eb13f-2656-4bb5-a94d-2a668dcf9a49',
            'name' => 'Auxiliar',
            'slug' => 'aux',
            'description' => ''
        ]);

    }
}
