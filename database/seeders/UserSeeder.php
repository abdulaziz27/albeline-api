<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            "name" => "admin",
            "email" => "admin@gmail.com",
            "email_verified_at" => now()->timezone('Asia/Jakarta'),
            "password" => Hash::make("admin"),
        ]);
        $user->assignRole('admin');
    }
}
