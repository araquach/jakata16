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
            'mobile' => '07921806884',
        ]);
        
        DB::table('feedback_clients')->insert([
            'iris_id' => '2',
            'stylist' => 'Jimmy Sharpe',
            'first_name' => 'Sarah',
            'last_name' => 'Reed',
            'mobile' => '07921806884',
        ]);
        
        DB::table('feedback_clients')->insert([
            'iris_id' => '3',
            'stylist' => 'Vicky Rowland',
            'first_name' => 'Helen',
            'last_name' => 'Jones',
            'mobile' => '07921806884',
        ]);
        
        DB::table('feedback_clients')->insert([
            'id' => '1456',
            'iris_id' => '4',
            'stylist' => 'Laura Hall',
            'first_name' => 'Ryan',
            'last_name' => 'Peters',
            'mobile' => '07921806884',
        ]);
        
        DB::table('feedback_clients')->insert([
            'id' => '1234',
            'iris_id' => '1234',
            'stylist' => 'Laura Crumplin',
            'first_name' => 'Trevor',
            'last_name' => 'Smith',
            'mobile' => '07921806884',
        ]);
    }
}