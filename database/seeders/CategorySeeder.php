<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['name' => 'Makanan', 'description' => 'Kategori Makanan'],
            ['name' => 'Minuman', 'description' => 'Kategori Minuman'],
        ];

        DB::table('categories')->insert($categories);
    }
}
