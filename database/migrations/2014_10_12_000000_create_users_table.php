<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id');
            $table->string('username',50);
            $table->string('lastname')->nullable();
            $table->string('firstname');
            $table->string('email')->unique();
            $table->string('phone',32)->unique();
            $table->string('password');
            $table->integer('status');
            $table->rememberToken();
            $table->timestamps();
        });

        //php artisan make:seeder UsersTableSeeder
        
    }
//php artisan make:model Role -m
//php artisan migrate --force
//php artisan db:seed
// Добавление доп поле
//php artisan make:migration --table=users adds_api_token_to_users_table
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
