<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Psr\Log\NullLogger;

class DateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(7),
            'body' => $this->faker->text(50),
            'target' => $this->faker->dateTimeBetween(2022-10-01, '2022-12-31'),
            'priority' => $this->faker->numberBetween(1, 3),


        ];
    }
}
