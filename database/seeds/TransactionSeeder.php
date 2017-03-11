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
        foreach (range(1,10) as $index) {
            DB::table('transactions')->insert([
                'id' => $faker->unique()->randomDigit,
                'user_id' => $faker->unique()->randomDigit,
                'room_number' => $faker->unique()->randomDigit,
                'rent_started' => $faker->dateTimeBetween($startDate = '-3 months', $endDate = 'now', $timezone = date_default_timezone_get()),
                'rent_ended' => $faker->dateTimeBetween($startDate = '+1 week', $endDate = '+11 months', $timezone = date_default_timezone_get())
            ]);
        }
    }
}
