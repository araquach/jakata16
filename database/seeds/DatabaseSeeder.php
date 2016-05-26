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
        $this->call(FeedbacksTableSeeder::class);
        $this->call(FeedbackClientsTableSeeder::class);
    }
}
