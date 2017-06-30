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
        $this->call(UsersTableSeeder::class);
        $this->call(FeedbacksTableSeeder::class);
        $this->call(FeedbackClientsTableSeeder::class);
        $this->call(ApprenticesTableSeeder::class);
        // $this->call(ApprenticeNotesTableSeeder::class);
        $this->call(StylistsTableSeeder::class);
        // $this->call(StylistNotesTableSeeder::class);
        $this->call(OffersTableSeeder::class);
        $this->call(BlogsTableSeeder::class);
        $this->call(BlogParasTableSeeder::class);
    }
}
