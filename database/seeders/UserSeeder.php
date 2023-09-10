<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        
        User::create([
            'name' => 'Admin',
            'email' => 'admin@tawjehi.ma',
            'password' => Hash::make('password'),
            'activation' => true,
            'role' => 'admin',
        ]);
        User::create([
            'name' => 'Client 1',
            'email' => 'client1@example.com',
            'password' => Hash::make('password'),
            'activation' => true,
        ]);
    }
}
