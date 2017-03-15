<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class RoomSeeder extends Seeder
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
            DB::table('rooms')->insert([
                'room_number' => $faker->unique()->numberBetween($min = 1, $max = 10),
            ]);
        }
    }
}
