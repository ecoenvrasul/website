<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run()
    {
        Employee::create([
            'fname' => "Rasul",
            'lname' => 'Kadirov',
            'phone' => +998999541667,
            'password' => Hash::make('12345'),
            'role' => 'admin'
        ]);
        Employee::create([
            'fname' => "Alixon",
            'lname' => 'Tolibayev',
            'phone' => +998333469508,
            'password' => Hash::make('12345'),
            'role' => 'assistant'
        ]);

    }
}
