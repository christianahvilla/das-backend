<?php

namespace Database\Factories;

use App\Models\Event;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Event::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'patient' => $this->faker->name,
            'treatment' => $this->faker->sentence,
            'start_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'), // '1979-06-09'
            'start_hour' => $this->faker->time($format = 'H:i', $max = 'now'), // '20:49'
            'end_date' => $this->faker->date($format = 'Y-m-d', $max = 'now'), // '1979-06-09'
            'end_hour' => $this->faker->time($format = 'H:i', $max = 'now'), // '20:49'
            'notes' => $this->faker->text
        ];
    }
}

