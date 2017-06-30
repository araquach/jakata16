<?php

namespace App\Http\Controllers;

use App\Blog;
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
        $blogs = Blog::where('publish', 1)->with('paras')->get();
        
        return view('blog.index', compact('blogs'));
    }
    
    public function show(Blog $blog)
    {
           return view('blog.show', compact('blog'));
    }
}
