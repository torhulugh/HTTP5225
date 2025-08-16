<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Professor;
use App\Models\Student;
use App\Models\Course;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Professor::factory(10)->create();
        Student::factory(20)->create();
        Course::factory(5)->create();
    }
}
