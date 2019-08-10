<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');

        DB::table('users')->insert([
            'uuid' => 'bfca0ccc-4094-44d5-a839-9978e1d8d88f',
            'name' => 'Faver Xavier Neira Molina',
            'username' => 'fasanemo',
            'email' => 'admin@n-inside.com',
            'password' => bcrypt('Temporal.123')
        ]);
        //factory(User::class, 400)->create();
    }
}
