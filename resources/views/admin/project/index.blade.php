@extends('admin')
@section('content')
    <div class="container" style="padding-top:40px">
        <div class="d-flex justify-content-between">
            <h2 class="text-primary">All Projects</h2>
            <a href="{{ route('project.create') }}"><button class="btn btn-primary" style="color:white;">+ Create a
                    Project </button></a>
        </div>
        <table class="table">

            <thead>
                <tr>
                    <th>Project Title</th>
                    <th>Category</th>
                    <th>Author</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->project_title }}</td>
                        <td>{{ $project->category }}</td>
                        <td>{{ $project->user->name }}</td>
                        <td><img src="{{ asset('images/' . $project->thumbnail) }}" /></td>
                        <td class="d-flex ">
                            <div><a href="{{ route('project.edit', $project->project_id) }}"><button
                                        class="btn btn-primary">Edit</button></div></a>
                            <div>
                                <form action="{{ route('project.destroy', $project->project_id) }}" method="POST">
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
