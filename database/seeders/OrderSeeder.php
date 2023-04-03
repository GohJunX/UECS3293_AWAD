<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Order;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker=Faker::create();
        for($i=0;$i<10;$i++){
            Order::create([
                'order_status'=>$faker->order_status,
                'pickup_delivery_date_time'=>$faker->dateTimeBetween('now','+1 month'), 
            ]);
        }
    }
}
