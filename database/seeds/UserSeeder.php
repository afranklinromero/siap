<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name' => 'alfredo montoya',
            'email' => 'amontoya.jar@gmail.com',
            'password' => bcrypt('123'),
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        DB::table('users')->insert([
            'name' => 'ademar romero',
            'email' => 'aromero@gmail.com',
            'password' => bcrypt('123'),
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        DB::table('users')->insert([
            'name' => 'cristian pizarroso',
            'email' => 'cpizarroso@gmail.com',
            'password' => bcrypt('123'),
            'created_at' =>now(),
            'updated_at' =>now(),
        ]);
        factory(User::class, 9)->create();
    }
}
