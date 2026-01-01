<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
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
        // Super Admin User
        $admin = User::create([
            'name' => "Admin User",
            'email' => "admin@pharmacy.com",
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $admin->assignRole('super-admin');

        // Sales Person 1
        $salesperson1 = User::create([
            'name' => "Staff User",
            'email' => "staff@pharmacy.com",
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $salesperson1->assignRole('sales-person');

        // Sales Person 2
        $salesperson2 = User::create([
            'name' => "Sales User",
            'email' => "sales@pharmacy.com",
            'password' => Hash::make('password'),
            'email_verified_at' => now(),
        ]);
        $salesperson2->assignRole('sales-person');

        // Additional test users
        User::factory(5)->create();
    }
}
