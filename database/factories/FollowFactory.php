<?php

namespace Database\Factories;

use App\Models\Follow;
use Illuminate\Database\Eloquent\Factories\Factory;

class FollowFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Follow::class;

    public function definition()
    {
        return [
            'follower_id' => $this->faker->numberBetween(1, 10),
            'followee_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
