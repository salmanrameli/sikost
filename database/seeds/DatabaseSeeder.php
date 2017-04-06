<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(AdminSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(RoomSeeder::class);
        $this->call(ExpensesCategoriesSeeder::class);
        $this->call(ExpensesSeeder::class);
        $this->call(PastTransactionSeeder::class);
        $this->call(TransactionSeeder::class);
    }
}
