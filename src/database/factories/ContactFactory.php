<?php

namespace Database\Factories;

use App\Models\Contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     * 
     */

    protected $model = Contact::class;

    public function definition()
    {
        return [
            'fullname' => $this->faker->name(),
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->safeEmail(),
            'mail' => $this->faker->postcode(),
            'address' => $this->faker->address(),
            'build' => $this->faker->buildingNumber(),
            'opinion' => $this->faker->realText(30),
        ];
    }
}
