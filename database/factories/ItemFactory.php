<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2,1,100000),
            'category_id' => $this->faker->numberBetween(1, 2), // Assuming you have 2 categories
            'img' => $this->faker->randomElement(['https://images.unsplash.com/photo-1612927601601-6638404737ce', 
            'https://images.unsplash.com/photo-1747317368514-590dad462536', 
            'https://images.unsplash.com/photo-1504674900247-0877df9cc836', 
            'https://images.unsplash.com/photo-1513104890138-7c749659a591']), // Assuming you have these images in your public folder
            'is_active' => $this->faker->boolean(),
        ];
    }
}
