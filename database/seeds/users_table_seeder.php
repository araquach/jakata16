<?php

use Illuminate\Database\Seeder;

class StylistNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stylist_notes')->insert([
            'stylist_id' => '1',
            'note' => 'Abdolutely terrible in every way possible',
        ]);
    }
}
