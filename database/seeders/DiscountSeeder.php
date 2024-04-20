<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('discounts')->insert([
            'name' => 'Diskon Idul Fitri',
            'percentage' => 0.2,
            'description' => 'Diskon spesial hari lebaran',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('discounts')->insert([
            'name' => 'Diskon Pelajar',
            'percentage' => 0.15,
            'description' => 'Diskon spesial untuk pelajar sepulang sekolah',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
