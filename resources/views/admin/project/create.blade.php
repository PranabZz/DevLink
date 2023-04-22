@extends('admin')
@section('content')
    <div class="container" style="padding:10px">
        <h2 class="mt-2 primary">New Project</h2>

        @if (session()->has('sucess'))
            <div class="alert alert-success">
                {{ session()->get('sucess') }}
            </div>
        @endif

        <form action="{{ route('project.store') }}" method="POST" style="margin-top:45px;" enctype="multipart/form-data">
            @csrf
            <label for="project_title">Project Title:</label><br>
            <input class="form-control" type="text" id="project_title" name="project_title"><br><br>

            <label for="project_slug">Slug:</label><br>
            <input class="form-control" type="text" id="project_slug" name="project_slug"><br><br>

            <label for="thumnail">Project thumbnail:</label><br>
            <input class="form-control" type="file" id="thumbnail" name="thumbnail"><br><br>

            <label for="Category">Category:</label><br>
            <select id="category" name="category" class="form-control">
                <option value="Html/css">HTML/CSS</option>
                <option value="React">React</option>
                <option value="Laravel">Laravel</option>
                <option value="Python">Python</option>
            </select><br><br>


            <label for="Descriptions">Description:</label><br>
            <textarea id="editor" name="description"></textarea><br><br>

            <label for="submission">Date of completation:</label>
            <input class="form-control" type="date" id="dos" name="dos"> <br><br>

            <label for="email">Email:</label><br>
            <input class="form-control" type="text" id="email" name="email"><br><br>

            <label for="code">Source code:</label><br>
            <input class="form-control" type="text" id="code" name="code"><br><br>

            <label for="Fees">Price after completation:</label><br>
            <input class="form-control" type="text" id="fee" name="fee"><br><br>

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
