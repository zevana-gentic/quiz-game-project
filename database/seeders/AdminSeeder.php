<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $user = [
            'name'          =>  'Admin',
            'username'      =>  'admin',
            'email'         =>  'admin@gmail.com',
            'password'      =>  Hash::make('admin321'),
            'role'          =>  'admin',
            'sound_setting' =>  null,
        ];

        User::create($user);
    }
}
