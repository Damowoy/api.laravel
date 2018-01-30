<?php

use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role')->insert([
            'name'  => "customer",
        ]);
        DB::table('role')->insert([
            'name'  => "manager",
        ]);
        DB::table('role')->insert([
            'name'  => "engener",
        ]);

    }
}
