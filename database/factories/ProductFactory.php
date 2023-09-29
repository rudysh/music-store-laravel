<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $images = [
            "images/promotions/bigsky.png",
            "images/promotions/bajo-promo.webp",
            "images/promotions/vox.png",
            "images/promotions/vox2.jpg",
            "images/promotions/cuerdas.jpg",
            "images/promotions/clarinete.jpg",
            "images/promotions/lira.jpg",
        ];


        return [
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'category_id' => Category::inRandomOrder()->first()->id,
            'img' => Arr::random($images),
        ];
    }
}
