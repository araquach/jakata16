<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogPicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blog_pics')->insert([
            'id' =>  1,
            'blog_id' => 1,
            'image_url' => 'http://via.placeholder.com/250x150',
            'alt' => 'Image one of Blog 1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_pics')->insert([
            'id' =>  2,
            'blog_id' => 1,
            'image_url' => 'http://via.placeholder.com/250x150',
            'alt' => 'Image two of Blog 1',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_pics')->insert([
            'id' =>  3,
            'blog_id' => 2,
            'image_url' => 'http://via.placeholder.com/250x150',
            'alt' => 'Image one of Blog 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_pics')->insert([
            'id' =>  4,
            'blog_id' => 2,
            'image_url' => 'http://via.placeholder.com/250x150',
            'alt' => 'Image two of Blog 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_pics')->insert([
            'id' =>  5,
            'blog_id' => 2,
            'image_url' => 'http://via.placeholder.com/250x150',
            'alt' => 'Image one of Blog 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_pics')->insert([
            'id' =>  6,
            'blog_id' => 2,
            'image_url' => 'http://via.placeholder.com/250x150',
            'alt' => 'Image two of Blog 2',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_pics')->insert([
            'id' =>  7,
            'blog_id' => 3,
            'image_url' => 'http://via.placeholder.com/250x150',
            'alt' => 'Image one of Blog 3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blog_pics')->insert([
            'id' =>  8,
            'blog_id' => 3,
            'image_url' => 'http://via.placeholder.com/250x150',
            'alt' => 'Image two of Blog 3',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
