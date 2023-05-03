<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $courses = Course::factory(50)->create();

        foreach ($courses as $course)
        {
            $modules = Module::factory(5)->create([
                'course_id' => $course->id,
            ]);

            foreach ($modules as $module)
            {
                Lesson::factory(5)->create([
                    'module_id' => $module->id,
                ]);
            }
        }
    }
}
