<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogParasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_paras')->insert([
            'id' => 1,
            'blog_id' => 1,
            'para' => 'Paragraph one of Blog One',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 2,
            'blog_id' => 1,
            'para' => 'Paragraph two of Blog One',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 3,
            'blog_id' => 2,
            'para' => 'Paragraph one of Blog Two',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 4,
            'blog_id' => 2,
            'para' => 'Paragraph two of Blog Two',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 5,
            'blog_id' => 3,
            'para' => 'Paragraph one of Blog Three',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_paras')->insert([
            'id' => 6,
            'blog_id' => 3,
            'para' => 'Paragraph two of Blog Three',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
