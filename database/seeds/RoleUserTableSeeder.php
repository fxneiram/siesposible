<?php

use Illuminate\Database\Seeder;

class RoleUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('role_user')->insert([
            'role_uuid' => 'b1cdda18-b206-4586-aba2-3409c5064ab1',
            'user_uuid' => 'bfca0ccc-4094-44d5-a839-9978e1d8d88f',
        ]);
        /*
                DB::table('role_user')->insert([
                    'role_uuid' => 'b1cdda18-b206-4586-aba2-3409c5064ab1',
                    'user_uuid' => 'fbc5f596-c398-4912-8542-569c4d04d6cb',
                ]);
                */
    }
}
