<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderItem;
use Faker\Factory as Faker;

class OrderItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= Faker::create();
        for ($i = 1; $i <= 20; $i++) {
            $orderItem = new OrderItem();
            $orderItem->product_id = $faker->numberBetween(1, 14);
            $orderItem->quantity = $faker->numberBetween(1, 5);
            $orderItem->price = $faker->randomFloat(2, 1, 100);
            $orderItem->order_id = $faker->numberBetween(1, 14);
            $orderItem->save();
    }
}
}
