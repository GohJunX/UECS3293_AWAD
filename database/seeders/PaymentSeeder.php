<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Payment;
use App\Models\Order;
use Faker\Factory as Faker;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        // Get all orders
        $orders = Order::all();

        foreach ($orders as $order) {
            // Create a payment for each order
            Payment::create([
                'payment_amount' => $order->total_amount,
                'payment_method' => $faker->randomElement(['Card', 'Cash']),
                'payment_status' => $faker->randomElement(['Completed', 'Pending', 'Canceled']),
                'order_id' => $order->id,
                'created_at' => $faker->dateTimeBetween($order->created_at, 'now'),
                'updated_at' => $faker->dateTimeBetween($order->created_at, 'now'),
            ]);
        }
    }
}
