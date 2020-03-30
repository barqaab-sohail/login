<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          
            'user_status'=>1,
            'email' => 'sohail.afzal@barqaab.com',
            'password' => bcrypt('Great@786'),
        ]);
    }
}
