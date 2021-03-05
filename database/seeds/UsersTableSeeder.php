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
            'name' => 'Admin',
            'email' => 'admin@gsioutsourcing.com',
            'password' => bcrypt('123123'),
            'role' => 'Admin',
            'email_verified_at' => '2020-03-03 00:00:00',
        ]);
    }
}
