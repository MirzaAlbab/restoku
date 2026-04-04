<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Food', 'description' => 'Printed and digital books'],
            ['category_name' => 'Drinks', 'description' => 'Beverages and drinks'],
        ];
        DB::table('categories')->insert($categories);
    }
}
