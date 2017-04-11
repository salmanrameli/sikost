<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        DB::table('users')->insert([
            'id' => '404',
            'name' => 'Salman',
            'sex' => 'Male',
            'birth' => '1996-06-01',
            'address' => $faker->address,
            'phone' => $faker->phoneNumber,
            'password' => bcrypt('salman'),
            'isAdmin' => true
        ]);
    }
}
