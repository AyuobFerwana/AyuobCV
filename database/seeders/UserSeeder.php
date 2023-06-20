<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // firstName
        $locale = app()->getLocale();
        $jsonPath = resource_path("lang/{$locale}.json");

        $firstName = File::exists($jsonPath)
            ? json_decode(File::get($jsonPath), true)['firstName']
            : '';

            // backend
        $locale = app()->getLocale();
        $jsonPath = resource_path("lang/{$locale}.json");

        $programmer = File::exists($jsonPath)
            ? json_decode(File::get($jsonPath), true)['Expertise']
            : '';

        $user = [
            'name' => $firstName,
            'expertise' => $programmer,
            'phone' => '(972+)0592549688',
            'email' => 'ayuobnasser21@gmail.com',
            'address' => 'Palestine / Gaza',
            'image' => '/cv/assets/images/ayuob.png'
        ];

        User::create($user);
    }
}
