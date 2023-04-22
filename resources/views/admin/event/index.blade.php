@extends('admin')
@section('content')
    <div class="container" style="padding-top:40px">
        <div class="d-flex justify-content-between">
            <h2 class="text-primary">All events</h2>
            <a href="{{ route('event.create') }}"><button class="btn btn-primary" style="color:white;">+ Create a
                    Event </button></a>
        </div>
        <table class="table">

            <thead>
                <tr>
                    <th>Event title</th>
                    <th>Location</th>
                    <th>Fees</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->event_title }}</td>
                        <td>{{ $event->event_location }}</td>
                        <td>{{ $event->event_fees }}</td>
                        
                        <td class="d-flex ">
                            <div><a href="{{ route('event.edit', $event->event_id) }}"><button
                                        class="btn btn-primary">Edit</button></div></a>
                            <div>
                                <form action="{{ route('event.destroy', $event->event_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <div style="padding-left:8px;"><button class="btn btn-danger"
                                            type="submit">Delete</button>
                                    </div>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
