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
            'username' => str_random(10),
            'mail' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}


// $table->increments('id')->autoIncrement();
//             $table->string('username',255);
//             $table->string('mail',255);
//             $table->string('password',255);
//             $table->string('bio',400)->nullable();
//             $table->string('images',255)->default('dawn.png')->nullable();
//             $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
//             $table->timestamp('modified_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
