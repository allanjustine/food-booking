<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FoodBooking;

class FoodBookingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodBooking::factory(10)->create();
    }
}
