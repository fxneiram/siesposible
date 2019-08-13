<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(PermissionTableSeeder::class);
        $this->call(BarriosTableSeeder::class);
        $this->call(TipoVotoTableSeeder::class);
        $this->call(IntencionVotoTableSeeder::class);
        $this->call(SectoresTableSeeder::class);
        $this->call(ApoyosTableSeeder::class);
        $this->call(LideresTableSeeder::class);
        $this->call(EventoTableSeeder::class);
    }
}
