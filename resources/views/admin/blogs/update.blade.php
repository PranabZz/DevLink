@extends('admin')
@section('content')
    <div class="container" style="padding:10px">
        <h2 class="mt-2 primary">Edit Event</h2>

        @if (session()->has('sucess'))
            <div class="alert alert-success">
                {{ session()->get('sucess') }}
            </div>
        @endif

        <form action="{{ route('blog.update', $blog->blog_id) }}" method="POST" style="margin-top:45px;"
            enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <label for="blog_title">Blog Title:</label><br>
            <input class="form-control" type="text" id="blog_title" name="blog_title"  value="{{ $blog->blog_title }}"><br><br>

            <label for="blog_thumnail">Blog thumbnail:</label><br>
            <input class="form-control" type="file" id="blog_thumbnail" name="blog_thumbnail"><br><br>

            <label for="blog_category">Category:</label><br>
            <select id="blog_category" name="blog_category" class="form-control">
                <option value="IT">IT</option>
                <option value="Share market">Share market</option>
                <option value="Webdev">Web dev</option>
                <option value="Programming">Programming</option>
            </select><br><br>


            <label for="Descriptions">Description:</label><br>
            <textarea id="editor" name="blog_description"></textarea><br><br>

            <label for="blog_author">Blog author</label>
            <input class="form-control" type="text" id="blog_author" name="blog_author"  value="{{ $blog->blog_author }}"> <br><br>

            <label for="blog_views">Views</label><br>
            <input class="form-control" type="text" id="blog_views" name="blog_views"><br><br>

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
