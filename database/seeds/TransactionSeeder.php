<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach (range(5,10) as $index) {
            DB::table('transactions')->insert([
                'user_id' => $faker->numberBetween($min = 0, $max = 10),
                'room_number' => $faker->numberBetween($min = 0, $max = 10),
                'rent_started' => $faker->dateTimeBetween($startDate = '-3 months', $endDate = 'now', $timezone = date_default_timezone_get()),
                'rent_ended' => $faker->dateTimeBetween($startDate = '+1 week', $endDate = '+11 months', $timezone = date_default_timezone_get())
            ]);
        }
    }
}
