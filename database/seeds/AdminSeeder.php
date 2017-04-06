<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'id' => '404',
            'name' => 'salman',
            'sex' => 'male',
            'birth' => '1996-06-01',
            'address' => 'no address',
            'phone' => '11111',
            'password' => bcrypt('salman'),
            'isAdmin' => true
        ]);
    }
}
