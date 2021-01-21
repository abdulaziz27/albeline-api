<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carts')->insert(
            [
                [
                    // 'user_id' => rand(1, 8),
                    'product_id' => rand(1, 7),
                    'qty' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    // 'user_id' => rand(1, 8),
                    'product_id' => rand(1, 7),
                    'qty' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    // 'user_id' => rand(1, 8),
                    'product_id' => rand(1, 7),
                    'qty' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    // 'user_id' => rand(1, 8),
                    'product_id' => rand(1, 7),
                    'qty' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    // 'user_id' => rand(1, 8),
                    'product_id' => rand(1, 7),
                    'qty' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    // 'user_id' => rand(1, 8),
                    'product_id' => rand(1, 7),
                    'qty' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    // 'user_id' => rand(1, 8),
                    'product_id' => rand(1, 7),
                    'qty' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                [
                    // 'user_id' => rand(1, 8),
                    'product_id' => rand(1, 7),
                    'qty' => rand(1, 3),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
            ]
        );
    }
}
