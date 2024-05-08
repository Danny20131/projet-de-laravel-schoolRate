<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin2000@outlook.com',
            'password' => Hash::make('daniel2018'),
            'role' => 'admin'
        ]);
        $this->call(AdminUserSeeder::class);
    }
}

