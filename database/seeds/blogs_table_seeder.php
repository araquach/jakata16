<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class BlogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('blogs')->insert([
            'id' => 1,
            'title' => 'Blog Post One',
            'slug' => 'blog-post-one',
            'author' => 'Adam',
            'meta_image' => 'http://via.placeholder.com/1000x600',
            'publish' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blogs')->insert([
            'id' => 2,
            'title' => 'Blog Post Two',
            'slug' => 'blog-post-two',
            'author' => 'Jimmy',
            'meta_image' => 'http://via.placeholder.com/1000x600',
            'publish' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
        
        DB::table('blogs')->insert([
            'id' => 3,
            'title' => 'Blog Post Three',
            'slug' => 'blog-post-three',
            'author' => 'Nat',
            'meta_image' => 'http://via.placeholder.com/1000x600',
            'publish' => 2,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ]);
    }
}
