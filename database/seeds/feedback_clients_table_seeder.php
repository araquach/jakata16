<?php

use Illuminate\Database\Seeder;

class FeedbackClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedback_clients')->insert([
            'iris_id' => '1',
            'stylist' => 'Maisie Thomson',
            'first_name' => 'Patricia',
            'last_name' => 'Carter',
            'mobile' => '0798567373682',
        ]);
        
        DB::table('feedback_clients')->insert([
            'iris_id' => '2',
            'stylist' => 'Jimmy Sharpe',
            'first_name' => 'Sarah',
            'last_name' => 'Reed',
            'mobile' => '07985667545672',
        ]);
        
        DB::table('feedback_clients')->insert([
            'iris_id' => '3',
            'stylist' => 'Natalie Doxey',
            'first_name' => 'Helen',
            'last_name' => 'Jones',
            'mobile' => '079846764673682',
        ]);
        
        DB::table('feedback_clients')->insert([
            'id' => '1456',
            'iris_id' => '4',
            'stylist' => 'Laura Hall',
            'first_name' => 'Ryan',
            'last_name' => 'Peters',
            'mobile' => '0733337373682',
        ]);
    }
}