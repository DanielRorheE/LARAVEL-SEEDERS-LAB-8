<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    public function run()
    {
        Student::factory(10)->create();

        Student::create([
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'age' => 20,
        ]);

        Student::create([
            'name' => 'Maria Santos',
            'email' => 'maria@example.com',
            'age' => 22,
        ]);
    }
}
