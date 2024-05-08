<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('categories')->insert(
            [
            'name' => 'Makanan',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        );

        DB::table('categories')->insert(
            [
            'name' => 'Minuman',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        );
        
        DB::table('categories')->insert(
            [
            'name' => 'Snack',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        );

        DB::table('categories')->insert(
            [
            'name' => 'Bakso',
            'created_at' => now(),
            'updated_at' => now(),
            ],
        );
    }
}
