<?php

namespace Database\Factories;

use App\Models\EarthQuake;
use Illuminate\Database\Eloquent\Factories\Factory;

class EarthQuakeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EarthQuake::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'location' => $this->faker->word,
        'intensity' => $this->faker->word,
        'date_time_happen' => $this->faker->date('Y-m-d H:i:s'),
        'number_of_casualty' => $this->faker->randomDigitNotNull,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
