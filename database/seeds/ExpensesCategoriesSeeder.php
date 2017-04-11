<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpensesCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expenses_categories')->insert([
            'name' => 'Internet',
        ]);
    }
}
