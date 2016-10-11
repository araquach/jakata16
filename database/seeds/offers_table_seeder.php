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
            'client_id' => '1111',
            'first_name' => 'Tracey',
            'last_name' => 'Peterson',
            'mobile' => '07921806884',
            'email' => 'adam@jakatasalon.co.uk',
            'gender' => 'f',
            'stylist_level' => 'ss',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('offers')->insert([
            'id' => '2',
            'salon_id' => '1',
            'client_id' => '2222',
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
            'client_id' => '3333',
            'first_name' => 'Sharon',
            'last_name' => 'smith',
            'mobile' => '0777777778',
            'email' => 'sharon@smith.com',
            'gender' => 'f',
            'stylist_level' => 'g',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('offers')->insert([
            'id' => '4',
            'salon_id' => '1',
            'client_id' => '4444',
            'first_name' => 'Graham',
            'last_name' => 'jones',
            'mobile' => '0777777778',
            'email' => 'sharon@smith.com',
            'gender' => 'm',
            'stylist_level' => 'ss',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('offers')->insert([
            'id' => '5',
            'salon_id' => '1',
            'client_id' => '5555',
            'first_name' => 'Mark Carter',
            'last_name' => 'smith',
            'mobile' => '0777777778',
            'email' => 'sharon@smith.com',
            'gender' => 'm',
            'stylist_level' => 's',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('offers')->insert([
            'id' => '6',
            'salon_id' => '1',
            'client_id' => '6666',
            'first_name' => 'David',
            'last_name' => 'jacobi',
            'mobile' => '0777777778',
            'email' => 'sharon@smith.com',
            'gender' => 'm',
            'stylist_level' => 'g',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
        
        DB::table('offers')->insert([
            'id' => '7',
            'salon_id' => '1',
            'client_id' => '7777',
            'first_name' => 'Alex',
            'last_name' => 'androgeonous',
            'mobile' => '0777777778',
            'email' => 'sharon@smith.com',
            'gender' => '',
            'stylist_level' => 'ss',
            'opt_out' => '',
            'created_at' => Carbon::now(),
        ]);
    }
}
