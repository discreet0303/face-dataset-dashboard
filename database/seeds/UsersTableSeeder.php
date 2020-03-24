<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'account' => 'root',
            'username' => 'root',
            'email' => 'example@gmail.com',
            'password' => Hash::make('root'),
            'is_activated' => 1,
            'primary_role' => 'super-admin'
        ]);
    }
}
