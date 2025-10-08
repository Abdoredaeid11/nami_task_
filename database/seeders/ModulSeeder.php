<?php

namespace Database\Seeders;

use App\Models\Modul;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ModulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Modul::create(['name' => 'analysis']);
        Modul::create(['name' => 'Design']);
        Modul::create(['name' => 'Development']);
        Modul::create(['name' => 'Testing']);
    }
}
