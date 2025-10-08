<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Employee::create(['name' => 'ahmed ali', 'salary' => 10000]);
        Employee::create(['name' => 'samy ibrahim', 'salary' => 12000]);
        Employee::create(['name' => 'adel ibrahem', 'salary' => 11000]);
        Employee::create(['name' => 'tamer mahnoud', 'salary' => 9000]);
        Employee::create(['name' => 'radwan ahmed', 'salary' => 7000]);
    }
}
