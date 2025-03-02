<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            // 'name' => 'Test User',
            // 'email' => 'test@example.com',
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password'=> Hash::make('admin')
        ]);

        $this->call([
            RoleSeeder::class,
            ProductSeeder::class
        ]);
    }
}
