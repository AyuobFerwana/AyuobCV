<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            'name' => 'Ayuob Ferwana',
            'expertise' => 'Backend Programmer',
            'phone' => '(972+)0592549688',
            'email' => 'ayuobnasser21@gmail.com',
            'address' => 'Palestine / Gaza',
            'image'=>'/cv/assets/images/ayuob.png'
        ];

        User::create($user);
    }
}
