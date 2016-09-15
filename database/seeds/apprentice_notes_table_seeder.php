<?php

use Illuminate\Database\Seeder;

class ApprenticeNotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('apprentice_notes')->insert([
            'apprentice_id' => '1',
            'note' => 'Like the look of this one, great body',
        ]);
        
        DB::table('apprentice_notes')->insert([
            'apprentice_id' => '2',
            'note' => 'What a fucking disaster',
        ]);
        
        DB::table('apprentice_notes')->insert([
            'apprentice_id' => '2',
            'note' => 'Now she\'s storking us!',
        ]);
    }
}