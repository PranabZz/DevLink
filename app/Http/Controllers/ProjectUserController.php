<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProjectUserController extends Controller
{

    public function index()
    {
        $projects = Project::all();
        $events = Event::take(3)->get();
        return view('frontend.home', compact('projects', 'events'));
    }

    public function project_index()
    {
        $projects = Project::all();
        return view('frontend.project', compact('projects'));
    }

    public function project_create(){
        return view('frontend.project-create');
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

        $data['user_id'] = Auth::user()->user_id;

        $project = Project::create($data);

        return back()->with('sucess','Sucessfully created');
        // dd($request);
    }
}
