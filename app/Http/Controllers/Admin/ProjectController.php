<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Illuminate\Support\Facades\Auth;


class ProjectController extends Controller
{
    //
    public function index()
    {
        $data['title'] = 'Projects';
        $projects = Project::all();
        return view('admin.project.index', $data, compact('projects'));
    }
    public function create()
    {
        $data['title'] = 'Projects Create';
        return view('admin.project.create', $data);
    }

    

    public function show( $id)
    {
        //
        return back()->with('sucess', 'Sucessfully updated');

    }

    public function edit(Project $project)
    {
        $data['title'] = 'Projects Create';
        
        return view('admin.project.update', $data, compact('project'));
    }

    public function update(Project $project, Request $request)
    {


            $project->update([
                'project_title' => $request->input('project_title'),
                'project_slug' => $request->input('project_slug'),
                'thumbnail' => $request->input('thumbnail'),
                'category' => $request->input('category'),
                'description' => $request->input('description'),
                'dos' => $request->input('dos'),
                'email' => $request->input('email'),
                'code' => $request->input('code'),
                'fee' => $request->input('fee'),
                'user_id' => Auth::user()->user_id,
            ]);

            
        
    }

    public function store(Request $request)
    {
        $data = $request->only([
            'project_title',
            'project_slug',
            'thumbnail',
            'category',
            'description',
            'dos',
            'email',
            'code',
            'fee',
        ]);

        $file = $request->file('thumbnail');

        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        $data['user_id'] = Auth::user()->user_id;
        $data['thumbnail'] = $filename;
        
        $project = Project::create($data);

        return back()->with('sucess', 'sucessfully created');
    }

    public function destroy($id)
    {
        $data = Project::find($id);
        $data->delete();
        return redirect()->route('project.index')->with('success','Product delete successfully');
    }
}
