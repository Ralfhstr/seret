<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'pname' => 'TUYOGAS 5.5 KG',
                'pdesc' => 'Pembelian TUYOGAS 5.5KG',
                'pprice' => '20000',
                'pphoto'=> '5.5.jpg',
            ],
            [
                'pname' => 'TUYOGAS 3 KG',
                'pdesc' => 'Pembelian TUYOGAS 3KG',
                'pprice' => '10000',
                'pphoto'=> '3.jpg',
            ]
        ]);
    }
}
