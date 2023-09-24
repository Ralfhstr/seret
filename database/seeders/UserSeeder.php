<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'phone' => '08xx',
                'email' => 'admin@admin',
                'password' => bcrypt('admin'),
                'level' => 'admin'
            ],
            [
                'name' => 'customer',
                'phone' => '09xx',
                'email' => 'customer@customer',
                'password' => bcrypt('customer'),
                'level' => 'customer'
            ],
        ]);
    }
}
