<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        DB::table('users')->insert([
            'username'  => "admin",
            'firstname' => "User 2018",
            'role_id'   => 1,
            'status'    => 1,
            'phone'     => "375291234567",
            'email'     => str_random(10).'@gmail.com',
            'password'  => bcrypt('secret'),
        ]);
        
    }
}
