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
            "img/promotions/bigsky.png",
            "img/promotions/bajo-promo.webp",
            "img/promotions/vox.png",
            "img/promotions/vox2.jpg",
            "img/promotions/cuerdas.jpg",
            "img/promotions/clarinete.jpg",
            "img/promotions/lira.jpg",
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
