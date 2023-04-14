<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = Category::all();

        $faker = \Faker\Factory::create();
        foreach ($categories as $category) {
            $numProducts = $faker->numberBetween(5, 20);
            for ($i = 0; $i < $numProducts; $i++) {
                $product = new Product();
                $product->name = $faker->name;
                $product->description = $faker->sentence(10);
                $product->price = $faker->randomFloat(2, 1, 100);
                $product->category_id = $category->id;
                $product->created_at = $faker->dateTimeBetween('-1 year', 'now');
                $product->updated_at = $faker->dateTimeBetween($product->created_at, 'now');
                $product->save();
            }
        }
    }
}
