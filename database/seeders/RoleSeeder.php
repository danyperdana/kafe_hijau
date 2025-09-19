<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $roles = [
            ['name' => 'admin', 'description' => 'Admin'],
            ['name' => 'cashier', 'description' => 'Kasir'],
            ['name' => 'chef', 'description' => 'Koki'],
            ['name' => 'customer', 'description' => 'Pelanggan'],
        ];

        DB::table('roles')->insert($roles);
    }
}
