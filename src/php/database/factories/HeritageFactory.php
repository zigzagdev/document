<?php

namespace Database\Factories;

use App\Models\Heritage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Heritage>
 */
class HeritageFactory extends Factory
{
    protected $model = Heritage::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Mont Saint-Michel',
            'country_name' => 0,
            'explanation' => 'One of the Famous France world heritage',
            'registered_year' => 1979,
            'continent' => 0,
        ];
    }
}
