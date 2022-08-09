<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CurrentCourse>
 */
class CurrentCourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'student_id'=>$this->faker->unique()->numberBetween(1,18),
            'Оценки'=>$this->faker->randomDigitNotNull,
            'Финальная_отметка'=>$this->faker->numberBetween(2,5),
            'Средняя_успеваемость'=>$this->faker->randomFloat(1,3,5),
            'course_id'=>$this->faker->numberBetween(1,5)
        ];
    }
}
