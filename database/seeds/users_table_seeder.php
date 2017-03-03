<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Adam Carter',
            'email' => 'adam@jakatasalon.co.uk',
            'password' => Hash::make('blonde123'),
            'role' => '1',
            'salon_id' => '1',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Jimmy Sharpe',
            'email' => 'jimmy@jakatasalon.co.uk',
            'password' => Hash::make('jim123'),
            'role' => '1',
            'salon_id' => '1',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Isobelle Lamb',
            'email' => 'izzy@jakatasalon.co.uk',
            'password' => Hash::make('iz123'),
            'role' => '2',
            'salon_id' => '2',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Michelle Railton',
            'email' => 'shell@shell.com',
            'password' => Hash::make('shell123'),
            'role' => '2',
            'salon_id' => '2',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Natalie Doxey',
            'email' => 'nat@nat.com',
            'password' => Hash::make('nat123'),
            'role' => '2',
            'salon_id' => '1',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Leon Pritchard',
            'email' => 'leon@leon.com',
            'password' => Hash::make('leon123'),
            'role' => '2',
            'salon_id' => '2',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Matt Lane',
            'email' => 'matt@matt.com',
            'password' => Hash::make('matt123'),
            'role' => '2',
            'salon_id' => '1',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Laura Hall',
            'email' => 'laura@laura.com',
            'password' => Hash::make('laura123'),
            'role' => '2',
            'salon_id' => '1',
            'remember_token' => null,
        ]);
        
        DB::table('users')->insert([
            'name' => 'Natasha Bailey',
            'email' => 'tash@tash.com',
            'password' => Hash::make('tash123'),
            'role' => '2',
            'salon_id' => '2',
            'remember_token' => null,
        ]);
    }
}
