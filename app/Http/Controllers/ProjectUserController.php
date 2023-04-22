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
        return view('frontend.home', compact('projects','events'));
    }

    public function project_index(){
        $projects = Project::all();
        return view('frontend.project', compact('projects'));

    }


    public function view(Request $request, $userId, $projectId)
    {
        $viewProject = Project::with('user')->where('project_id', $projectId)->firstOrFail();

       return view('frontend.view',compact('viewProject'));
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

        dd($data);
    }
}
