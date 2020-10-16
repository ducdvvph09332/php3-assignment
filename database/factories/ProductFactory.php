<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->lastName,
            'category_id' => $this->faker->numberBetween(1,10),
            'image_url' => 'https://image.shutterstock.com/image-illustration/website-business-internet-web-concept-600w-432512893.jpg',
            'description' => $this->faker->realText($maxNbChars = 200, $indexSize = 2),
            'price' => $this->faker->randomNumber(6),
            'sale_percent' => $this->faker->randomFloat($nbMaxDecimals = NULL, $min = 0, $max = 100),
            'stocks' => $this->faker->randomNumber(2),
            'is_active' => $this->faker->numberBetween(0,1),
        ];
    }
}
