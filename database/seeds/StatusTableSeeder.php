<?php

use Illuminate\Database\Seeder;

class StatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('status')->insert([
            'name'  => "Open",
        ]);
        DB::table('status')->insert([
            'name'  => "Assigned",
        ]);
        DB::table('status')->insert([
            'name'  => "In Process ",
        ]);
        DB::table('status')->insert([
            'name'  => "Resolved",
        ]);
        DB::table('status')->insert([
            'name'  => "Closed",
        ]);
        DB::table('status')->insert([
            'name'  => "Reopened",
        ]);
    }
}
