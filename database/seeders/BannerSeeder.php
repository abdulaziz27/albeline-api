<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BannerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banners')->insert(
            [
                [
                    "big_banner" => true,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "big_banner" => true,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "big_banner" => true,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "big_banner" => true,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "big_banner" => false,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
                [
                    "big_banner" => false,
                    "created_at" => now(),
                    "updated_at" => now(),
                ],
            ]
        );
    }
}
