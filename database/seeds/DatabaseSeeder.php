<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Master',
            'username' => 'master',
            'email' => 'master@gmail.com',
            'password' => bcrypt('master'),
       ]);

       DB::table('users')->insert([
            'name' => 'Sanz',
            'username' => 'sanz31',
            'email' => 'sanz@gmail.com',
            'password' => bcrypt('sanz31'),
       ]);

       DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('kaye21'),
       ]);

       factory(App\User::class, 20)->create();
    }
}
