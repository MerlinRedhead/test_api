<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'Имя'=>$this->faker->name,
            'Адрес'=>$this->faker->address,
            'Телефон'=>$this->faker->phoneNumber,
            'Номер_зачетки'=>$this->faker->numerify,
            'Оценки'=>$this->faker->numberBetween(1,5),
            'Средняя_успеваемость'=>$this->faker->randomFloat(1,2,4),
            'Финальная_оценка'=>$this->faker->numberBetween(1,5),
            'course_id'=>$this->faker->numberBetween(1,5)
        ];

    }
}
