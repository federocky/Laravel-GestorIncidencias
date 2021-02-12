<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'     => Str::random(10),
            'category'  => $this->faker->sentence(),
            'priority'  => $this->faker->randomElement(['low', 'medium', 'high']),
            'message'   => $this->faker->paragraph(),
            'status'    => $this->faker->randomElement(['open', 'closed']),
            'user_id'   => $this->faker->randomElement([1, 2, 3, 4])
        ];
    }
}
