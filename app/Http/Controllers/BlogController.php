<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogPic;
use App\BlogPara;
use Illuminate\Http\Request;
use App\Http\Requests;

class BlogController extends Controller
{
    public function __construct(Blog $blog)
	{
	    $this->blog = $blog;
	}
    
    public function index()
    {
        $blogs = Blog::with('pics')->with('paras')->get();
        
        return view('blog.index', compact('blogs'));
        
        // dd($blogs);
    }
    
    public function show(Blog $blog)
    {
        return view('blog.show', compact('blog'));
    }
}
