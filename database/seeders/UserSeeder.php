<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $user1 = User::create([
            'name' => env('USER_NAME', 'default_name'),
            'email' => env('USER_EMAIL', 'default_email'),
            'password' => Hash::make(env('USER_PASSWORD', 'default_password')),
        ]);
    }
}
