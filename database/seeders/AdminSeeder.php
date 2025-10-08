<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Admin::create([
    'name' => 'Super Admin',
    'email' => 'abdo@nami.com',
    'password' => Hash::make('123456'),
    'phone' => '0123456789',
    'image' => null
]);
    }
}
