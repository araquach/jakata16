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
            'note' => 'Fantastic looking stylist - need to get them on board',
        ]);
        
        DB::table('stylist_notes')->insert([
            'stylist_id' => '2',
            'note' => 'Oh my god - this is terrible',
        ]);
    }
}
