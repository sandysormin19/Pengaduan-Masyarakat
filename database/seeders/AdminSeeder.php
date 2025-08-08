<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create{[
            'name' => 'Admin',
            'email' => 'adminpengaduan@gmail.com',
            'password' => bcrypt('admin123'),
        ]} ->assignRole('admin');
        ;
    }
}
