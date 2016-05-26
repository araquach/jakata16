<?php

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feedbacks')->insert([
            'intro' => '1',
            'consultation' => '2',
            'styling_area' => '1',
            'stylist_appearance' => '3',
            'prod_advice' => '-1',
            'styling_advice' => '2',
            'mkt1' => '1',
            'mkt2' => '',
            'mkt3' => '1',
            'value_for_money' => '1',
            'whole_experience' => '2',
            'end_result' => '2',
            'extra' => 'I loved the experience - it was great',
            'extra_edit' => 'I loved the experience - it was great',
            'client_id' => '1',
            'allow' => '1',
            'publish' => '1',
        ]);
        
        DB::table('feedbacks')->insert([
            'intro' => '1',
            'consultation' => '2',
            'styling_area' => '1',
            'stylist_appearance' => '3',
            'prod_advice' => '-1',
            'styling_advice' => '2',
            'mkt1' => '1',
            'mkt2' => '',
            'mkt3' => '1',
            'value_for_money' => '1',
            'whole_experience' => '2',
            'end_result' => '2',
            'extra' => 'Fantastic Salon, would definately come back!',
            'extra_edit' => 'Fantastic Salon, would definately come back!',
            'client_id' => '2',
            'allow' => '1',
            'publish' => '1',
        ]);
        
        DB::table('feedbacks')->insert([
            'intro' => '1',
            'consultation' => '2',
            'styling_area' => '1',
            'stylist_appearance' => '3',
            'prod_advice' => '-1',
            'styling_advice' => '2',
            'mkt1' => '1',
            'mkt2' => '',
            'mkt3' => '1',
            'value_for_money' => '1',
            'whole_experience' => '2',
            'end_result' => '2',
            'extra' => 'Never had such a good time in my life. I will return',
            'extra_edit' => 'Never had such a good time in my life. I will return',
            'client_id' => '3',
            'allow' => '1',
            'publish' => '1',
        ]);
        
        DB::table('feedbacks')->insert([
            'intro' => '1',
            'consultation' => '2',
            'styling_area' => '1',
            'stylist_appearance' => '3',
            'prod_advice' => '-1',
            'styling_advice' => '2',
            'mkt1' => '1',
            'mkt2' => '',
            'mkt3' => '1',
            'value_for_money' => '1',
            'whole_experience' => '2',
            'end_result' => '2',
            'extra' => 'Not the best haircut but the staff were ok',
            'extra_edit' => 'Not the best haircut but the staff were ok',
            'client_id' => '1456',
            'allow' => '1',
            'publish' => '1',
        ]);
    }
}
