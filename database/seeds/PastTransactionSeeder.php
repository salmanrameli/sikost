<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PastTransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(1,6) as $index) {
            DB::table('transactions')->insert([
                'user_id' => $faker->numberBetween($min = 0, $max = 10),
                'room_number' => $faker->numberBetween($min = 0, $max = 10),
                'rent_started' => $faker->dateTimeBetween($startDate = '-11 months', $endDate = '-5 months', $timezone = date_default_timezone_get()),
                'rent_ended' => $faker->dateTimeBetween($startDate = '-4 months', $endDate = '-1 day', $timezone = date_default_timezone_get())
            ]);
        }
    }
}
