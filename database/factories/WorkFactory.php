<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Work>
 */
class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'en' => [
                'title' => 'Kiallitas',
                'active' => true

            ],
            'hu' => [
                'title' => 'Kiallitas',
                'active' => true
            ],
            'year' => '2002',
            'published' => 1,
        ];
    }
}
