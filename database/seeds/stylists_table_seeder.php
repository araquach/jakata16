<?php

use Illuminate\Database\Seeder;

class StylistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stylists')->insert([
            'first_name' => 'Harriet',
            'second_name' => 'Hankey',
            'address1' => 'Archers Lane',
            'address2' => 'Great Sankey',
            'town' => 'Warrington',
            'postcode' => 'WA5 6TY',
            'email' => 'harriot@hankey.com',
            'phone' => '',
            'mobile' => '07959456789',
            'current_emp' => 'Stylist',
            'current_emp_des' => 'stylist',
            'school_qual' => '9 or more GCSE',
            'qual_non_hair' => 'None',
            'adex_stock' => '1',
            'adex_manage' => '',
            'adex_train' => '',
            'adex_reception' => '1',
            'adex_marketing' => '',
            'adex_cservice' => '',
            'experience' => 'Very Experiences',
            'current_position' => 'Stylist',
            'client_base' => 'Yes - local',
            'qualifications' => 'NVQ3',
            'cutting_skills' => '5',
            'colour_knowledge' => '4',
            'colour_skills' => '4',
            'men' => '4',
            'extensions_weave' => '5',
            'extensions_other' => '5',
            'chem_straighten' => '3',
            'braz_blow' => '4',
            'awards' => '',
            'about_you' => 'I love hairdressing. I\'m a very bubbly individual',
            'why_hairdressing' => 'Hairdressing is well suited to me',
            'why_jakata' => 'Jakata is undoubtably the best salon in Warrington',
            'salon_id' => '1',
            'created_at' => Carbon\Carbon::now(),
        ]);
        
        DB::table('stylists')->insert([
            'first_name' => 'Janet',
            'second_name' => 'Jones',
            'address1' => '2 Green Road',
            'address2' => 'Woolston',
            'town' => 'Warrington',
            'postcode' => 'WA2 4ER',
            'email' => 'janet@jones.co.uk',
            'phone' => '674523',
            'mobile' => '07985463764',
            'current_emp' => 'Unemployed',
            'current_emp_des' => '',
            'school_qual' => '1 or mor GCSE',
            'qual_non_hair' => 'None',
            'adex_stock' => '1',
            'adex_manage' => '',
            'adex_train' => '',
            'adex_reception' => '1',
            'adex_marketing' => '',
            'adex_cservice' => '',
            'experience' => 'A fair bit',
            'current_position' => 'Stylist',
            'client_base' => 'No',
            'qualifications' => 'NVQ2',
            'cutting_skills' => '2',
            'colour_knowledge' => '3',
            'colour_skills' => '4',
            'men' => '2',
            'extensions_weave' => '2',
            'extensions_other' => '2',
            'chem_straighten' => '3',
            'braz_blow' => '3',
            'awards' => '2',
            'about_you' => 'I\'m pretty dull to be honest with you',
            'why_hairdressing' => 'I chose hairdressing as a carreer because it makes me happy inside',
            'why_jakata' => 'Jakata never ceases to amaze me with it\'s innovatiove approach to everything!',
            'salon_id' => '2',
            'created_at' => Carbon\Carbon::now();
        ]);
        
    }
}
