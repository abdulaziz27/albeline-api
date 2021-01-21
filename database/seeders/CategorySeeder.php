<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [
                [
                    'name' => 'Care & Beauty',
                    'popular' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Moslem Fashions',
                    'popular' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Men Fashions',
                    'popular' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Woman Fashions',
                    'popular' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Handphone & Accessories',
                    'popular' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Laptop & Accessories',
                    'popular' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Mom and Baby',
                    'popular' => true,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Electronics',
                    'popular' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Sports',
                    'popular' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Shoes',
                    'popular' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    'name' => 'Bags',
                    'popular' => false,
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
