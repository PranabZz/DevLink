<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use App\Models\Blog;
use App\Models\Event;

class HomeController extends Controller
{
    //
    public function index()
    {
        $projects = Project::all();
        $events = Event::take(3)->get();
        $blogs = Blog::take(5)->get();
        return view('frontend.home', compact('projects', 'events' ,'blogs'));
    }

    public function project_view(Request $request, $userId, $projectId)
    {
        $viewProject = Project::with('user')->where('project_id', $projectId)->firstOrFail();

        return view('frontend.view', compact('viewProject'));
    }

    public function event_view($event_id)
    {
        $viewEvent = Event::where('event_id',$event_id)->firstOrFail();
        return view('frontend.event', compact('viewEvent'));
    }



}
