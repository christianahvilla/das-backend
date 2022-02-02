<?php

namespace Database\Factories;

use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;

class PatientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Patient::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->uuid,
            'name' => $this->faker->firstName,
            'second_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'birthday' => $this->faker->date($format = 'Y-m-d', $max = 'now'), // '1979-06-09'
            'street' => $this->faker->streetName,
            'street_number' => $this->faker->randomDigit,
            'kind_patient' => 'Ortodoncia',
            'settlement' => $this->faker->cityPrefix,
            'zip_code' => $this->faker->postcode,
            'country' => $this->faker->country,
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'phone_number' => $this->faker->tollFreePhoneNumber,
            'cell_number' => $this->faker->phoneNumber,
            'email' => $this->faker->email,
        ];
    }
}
