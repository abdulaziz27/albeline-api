<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Cart;
use App\Models\Review;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            BannerSeeder::class,
            CartSeeder::class,
            CategoryProductSeeder::class,
            CategorySeeder::class,
            HistorySeeder::class,
            ImageSeeder::class,
            ProductSeeder::class,
            ReviewSeeder::class,
            RoleSeeder::class,
            StoreSeeder::class,
            UserSeeder::class,
        ]);
    }
}
