<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogUserController extends Controller
{
    //
    public function index()
    {
        $blogs = Blog::all();
        return view('frontend.blog', compact('blogs'));
    }


    public function show(Request $request,$id)
    {
        $viewBlog = Blog::where('blog_id', $id)->firstOrFail();
        return view('frontend.show', compact('viewBlog'));
    }

}
