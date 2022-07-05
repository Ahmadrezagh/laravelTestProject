<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'image' => 'uploads/fake/'.$this->faker->numberBetween(1,4).'.jpeg',
            'in_stock' => $this->faker->numberBetween(0,1),
            'price' => $this->faker->numberBetween(10,50),
            'description' => $this->faker->realText(500),
            'ingredients' => json_encode([
                'bacon, diced into 1/4 -inch pieces 120 ( gm )',
                'dry white wine 35 ( gm )',
                'Spoon Salt 12 ( ml )',
                'large eggs 50 ( gm )',
                'grated parmesan cheese 30 ( gm )',
                'extra virgin olive oil 250 ( ml )'
            ]),
            'nutrition' => json_encode([
                'Carbohydrate 120 ( ml )',
                'Fat Total 74 ( gm )',
                'Protine 68 ( gm )',
                'Fat Saturated 35 ( gm )',
                'Energy 260 ( ml )',
                'Deitary Fiber 155 ( ml )'
            ])

        ];
    }
}
