<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('orders')->insert([
            'gross_amount' => 84000,
            'customer_name' => "ruth",
            'table_number' => 7,
            'status' => 'Dipesan',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
