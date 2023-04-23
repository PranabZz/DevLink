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

            $project->project_title = $request->input('project_title');
            $project->project_slug = $request->input('project_slug');
            $project->description = $request->input('description');
            $project->category = $request->input('category');
            $project->email = $request->input('email');
            $project->code = $request->input('code');
            $project->fees = $request->input('fees');
            $project->dos = $request->input('dos');
            $project->user_id = Auth::user()->user_id;
    
    
            if ($request->hasFile('thumbnail')) {
     
                $file = $request->file('thumbnail');
                $filename = uniqid() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $filename);
                $project->thumbnail = $filename;
            }
    
            $project->save();
    
            return back()->with('success', 'Successfully updated');
            
        
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
