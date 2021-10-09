<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'teguh permadi',
            'username' => 'teguh',
            'phone' => '6285736067133',
            'email' => 'tguh.permadi@gmail.com',
            'password' => Hash::make('password'),
            'remember_token' => Str::random(10),
            'is_active' => 'yes',
        ]);
    }
}
