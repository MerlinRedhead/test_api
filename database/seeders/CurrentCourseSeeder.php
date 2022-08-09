<?php

namespace Database\Seeders;

use App\Models\CurrentCourse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CurrentCourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CurrentCourse::factory()->count(5)->create();
    }
}
