<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class OffersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            'id' => '1',
            'salon_id' => '1',
            'client_id' => '1234',
            'first_name' => 'Adam',
            'last_name' => 'Carter',
            'mobile' => '07921806884',
            'email' => 'adam@jakatasalon.co.uk',
            'gender' => 'm',
            'stylist_level' => 'ss',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('offers')->insert([
            'id' => '2',
            'salon_id' => '2',
            'client_id' => '1111',
            'first_name' => 'Helen',
            'last_name' => 'jones',
            'mobile' => '0777777777',
            'email' => 'helen@jones.com',
            'gender' => 'f',
            'stylist_level' => 's',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('offers')->insert([
            'id' => '3',
            'salon_id' => '1',
            'client_id' => '2222',
            'first_name' => 'Sharon',
            'last_name' => 'smith',
            'mobile' => '0777777778',
            'email' => 'sharon@smith.com',
            'gender' => 'f',
            'stylist_level' => 'g',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
    }
}
