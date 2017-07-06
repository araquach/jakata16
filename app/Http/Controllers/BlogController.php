<?php

namespace App\Http\Controllers;

use App\Blog;
use App\BlogPara;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;

class BlogController extends Controller
{
    public function __construct(Blog $blog)
	{
	    $this->blog = $blog;
	}
    
    public function index()
    {
        $blogs = Blog::where('publish', 1)->orWhere('publish', 3)->with('paras')->orderBy('created_at', 'asc')->get();
        
        return view('blog.index', compact('blogs'));
    }
    
    public function show(Blog $blog)
    {
           return view('blog.show', compact('blog'));
    }
}
