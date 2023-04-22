@extends('admin')
@section('content')
    <div class="container" style="padding:10px">
        <h2 class="mt-2 primary">New Event</h2>

        @if (session()->has('sucess'))
            <div class="alert alert-success">
                {{ session()->get('sucess') }}
            </div>
        @endif

        <form action="{{ route('event.store') }}" method="POST" style="margin-top:45px;" enctype="multipart/form-data">
            @csrf
            <label for="event_title">Event Title:</label><br>
            <input class="form-control" type="text" id="event_title" name="event_title"><br><br>

            <label for="event_thumnail">Event thumbnail:</label><br>
            <input class="form-control" type="file" id="event_thumbnail" name="event_thumbnail"><br><br>

            <label for="event_location">Location:</label><br>
            <select id="event_location" name="event_location" class="form-control">
                <option value="Kathmandu">Kathmandu</option>
                <option value="Chitwan">Chitwan</option>
                <option value="Lalitpur">Lalitpur</option>
                <option value="Jhapa">Jhapa</option>
            </select><br><br>


            <label for="Descriptions">Description:</label><br>
            <textarea id="editor" name="event_description"></textarea><br><br>

            <label for="event_organizer">Event organizer</label>
            <input class="form-control" type="text" id="event_organizer" name="event_organizer"> <br><br>

            <label for="event_fees">Event Fee</label><br>
            <input class="form-control" type="text" id="event_fees" name="event_fees"><br><br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.ckeditor.com/ckeditor5/29.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
