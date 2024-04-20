<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //ID Categories
        $categoriesIDNasi = DB::table('categories')->where('name', 'Nasi')->value('id');
        $categoriesIDBakso = DB::table('categories')->where('name', 'Bakso')->value('id');
        $categoriesIDSnack = DB::table('categories')->where('name', 'Snack')->value('id');
        $categoriesIDMinuman = DB::table('categories')->where('name', 'Minuman')->value('id');

        //ID Discount
        $discIdFitri = DB::table('discounts')->where('name', 'Diskon Idul Fitri')->value('id');
        $discPelajar = DB::table('discounts')->where('name', 'Diskon Pelajar')->value('id');

        DB::table('menus')->insert([
            'categories_id' => $categoriesIDBakso,
            'discount_id' => $discPelajar,
            'name' => 'Bakso Biasa',
            'price' => 15000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Bakso biasa, mie keriting, dan bihun dengan tambahan irisan daun bawang dan daun goreng.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('menus')->insert([
            'categories_id' => $categoriesIDBakso,
            'discount_id' => $discPelajar,
            'name' => 'Bakso Spesial',
            'price' => 20000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Bakso biasa, bakso urat, bakso telur, mie keriting, dan bihun dengan tambahan irisan daun bawang dan daun goreng.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('menus')->insert([
            'categories_id' => $categoriesIDNasi,
            'discount_id' => $discPelajar,
            'name' => 'Nasi Goreng',
            'price' => 22000,
            'quantity' => 20,
            'status' => true,
            'description' => 'Nasi goreng coklat dengan tambahan irisan daun bawang, kacang polong, suiran ayam, telur, dan kerupuk.',
            'image' => null,
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
