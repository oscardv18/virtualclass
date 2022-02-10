<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

class AreaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Area::class;

    public function definition()
    {
        return [
            'area_name' => $this->faker->sentence(2),
            'description' => $this->faker->sentence(25),
        ];
    }
}
