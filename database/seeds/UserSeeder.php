<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
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
            DB::table('users')->insert([
                'id' => $faker->unique()->numberBetween($min = 1, $max = 10),
                'name' => $faker->name($gender = 'male'),
                'sex' => 'Male',
                'birth' => $faker->date,
                'address' => $faker->address,
                'phone' => $faker->phoneNumber,
                'password' => bcrypt('secret'),
                'isAdmin' => false,
            ]);
        }
    }
}
