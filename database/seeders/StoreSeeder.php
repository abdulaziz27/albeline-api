<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert(
            [
                [
                    'user_id' => 1,
                    'product_id' => rand(1, 7),
                    'created_at' => now(),
                    'updated_at' => now(),
                ],
                
            ]
        );
    }
}
