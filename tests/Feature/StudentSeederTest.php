<?php

namespace Tests\Feature;

use Database\Seeders\StudentSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StudentSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_student_seeder_creates_factory_and_sample_students(): void
    {
        $this->seed(StudentSeeder::class);

        $this->assertDatabaseCount('students', 12);
        $this->assertDatabaseHas('students', [
            'name' => 'Juan Dela Cruz',
            'email' => 'juan@example.com',
            'age' => 20,
        ]);
        $this->assertDatabaseHas('students', [
            'name' => 'Maria Santos',
            'email' => 'maria@example.com',
            'age' => 22,
        ]);
    }
}
