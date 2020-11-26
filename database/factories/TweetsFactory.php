<?php

namespace Database\Factories;

use App\Models\Tweet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TweetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tweet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'body' => $this->faker->realText(rand(80, 600)),
            'created_at' => $this->faker->dateTimeBetween('-24 hours', 'now'),
            'image'=>$this->faker->image('public/storage/images',640,480, null, false),
            'user_id' => function () {
                return User::select('*')
                    ->inRandomOrder()
                    ->first()->id;
            },
        ];
    }
}
