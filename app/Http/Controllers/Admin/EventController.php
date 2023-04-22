<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Auth;


class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['title'] = 'Event';
        $events = Event::all();
        return view('admin.event.index', $data, compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $data['title'] = 'Event create';
        return view('admin.event.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->only([
            'event_title',
            'event_thumbnail',
            'event_fees',
            'event_location',
            'event_description',
            'event_organizer'
        ]);

        $file = $request->file('event_thumbnail');

        $filename = uniqid() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        $data['event_thumbnail'] = $filename;

        $event = Event::create($data);

        return back()->with('sucess', 'sucessfully created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return back()->with('sucess', 'Sucessfully updated');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {
        //
        $data['title'] = 'Event edit';

        return view('admin.event.update', $data, compact('event'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Event $event, Request $request)
    {

        if (!$event) {
            return back()->with('error', 'Event not found');
        }

        $event->event_title = $request->input('event_title');
        $event->event_location = $request->input('event_location');
        $event->event_description = $request->input('event_description');
        $event->event_fees = $request->input('event_fees');
        $event->event_organizer = $request->input('event_organizer');


        if ($request->hasFile('event_thumbnail')) {
 
            $file = $request->file('event_thumbnail');
            $filename = uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $filename);
            $event->event_thumbnail = $filename;
        }

        $event->save();

        return back()->with('success', 'Successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $data = Event::find($id);
        $data->delete();
        return redirect()->route('event.index')->with('success', 'Product delete successfully');
    }
}
