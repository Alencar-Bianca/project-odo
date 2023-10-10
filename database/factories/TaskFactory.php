<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\{User, Category};
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();

        while (count($user->categories) == 0) {
            $user = User::all()->random();
        }

        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(60),
            'is_done' => $this->faker->boolean(30),
            'due_date' => $this->faker->dateTime(),
            'user_id' => $user ,
            'category_id' => $user->categories->random()
        ];
    }
}
