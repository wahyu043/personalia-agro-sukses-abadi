<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserHrSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'HR Ekafarm',
            'nip' => 'HR',
            'email' => 'hr@ekafarm.local',
            'password' => Hash::make('CHANGE_ME_BEFORE_DEPLOY'),
            'role' => 'hr',
        ]);
    }
}
