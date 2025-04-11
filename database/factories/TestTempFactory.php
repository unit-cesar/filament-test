<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TestTemp>
 */
class TestTempFactory extends Factory
{
    protected $model = \App\Models\TestTemp::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'birth' => $this->faker->date('Y-m-d', '2005-01-01'),
        ];
    }
}
