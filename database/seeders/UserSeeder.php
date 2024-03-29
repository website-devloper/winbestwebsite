<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => 1,
            'fullName' => 'admin',
            'email' => 'admin@marwabenharda.com',
            'password' => Hash::make('secret-winbest@123'),
            'role' => 'admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('users')->insert([
            'id' => 2,
            'fullName' => 'Super Admin',
            'email' => 'super-admin@marwabenharda.com',
            'password' => Hash::make('1234'),
            'role' => 'super-admin',
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
