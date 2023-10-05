<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['title'] = 'Blogs';
        $blogs = Blog::all();
        return view('admin.blogs.index', $data, compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['title'] = 'Blog create';
        return view('admin.blogs.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->only([
            'blog_title',
            'blog_thumbnail',
            'blog_views',
            'blog_category',
            'blog_description',
            'blog_author'
        ]);

        $file = $request->file('blog_thumbnail');

        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);
        $data['thumbnail'] = $filename;

        $blog = Blog::create($data);

        return back()->with('sucess', 'sucessfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
        $data['title'] = 'Projects Create';

        return view('admin.blogs.update', $data, compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //

        $blog->blog_title = $request->input('blog_title');
        $blog->blog_category = $request->input('blog_category');
        $blog->blog_description = $request->input('blog_description');
        $blog->blog_views = $request->input('blog_views');
        $blog->blog_author = $request->input('blog_author');

        if ($request->hasFile('blog_thumbnail')) {

            $file = $request->file('blog_thumbnail');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $blog->blog_thumbnail = $filename;
        }

        $blog->save();

        return back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $data = Blog::find($id);
        $data->delete();
        return redirect()->route('blog.index')->with('success','Product delete successfully');
    }
}
