@extends('admin')
@section('content')
    <div class="container" style="padding-top:40px">
        <div class="d-flex justify-content-between">
            <h2 class="text-primary">All Blogs</h2>
            <a href="{{ route('blog.create') }}"><button class="btn btn-primary" style="color:white;">+ Create a
                    Blog </button></a>
        </div>
        <table class="table">

            <thead>
                <tr>
                    <th>Blog title</th>
                    <th>Blog category</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                    <tr>
                        <td>{{ $blog->blog_title }}</td>
                        <td>{{ $blog->blog_category }}</td>
                        <td>{{ $blog->blog_author }}</td>
                        
                        <td class="d-flex ">
                            <div><a href="{{ route('blog.edit', $blog->blog_id) }}"><button
                                        class="btn btn-primary">Edit</button></div></a>
                            <div>
                                <form action="{{ route('blog.destroy', $blog->blog_id) }}" method="POST">
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
