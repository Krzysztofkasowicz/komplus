<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'NIP' => $this->faker->numberBetween(0000000000,9999999999),
            'zip_code' => $this->faker->postcode,
            'street' => $this->faker->streetName,
            'city' => $this->faker->city,
            'phone' => $this->faker->phoneNumber,
            'email' => $this->faker->phoneNumber,
            'website' => 'www.' . Str::random(10) . '.pl',
            'industry' => $this->faker->randomElement(['automobile', 'clothing', 'food services', 'mining', 'transport'])
        ];
    }

    public function run()
    {
    }
}

