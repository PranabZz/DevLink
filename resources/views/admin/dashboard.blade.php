@extends('admin')
@section('content')
    <!-- for header part -->

    <div class="main">
        <div class="box-container">

            <div class="box border border-3">
                <div class="text">
                    <h2 class="topic-heading">{{$blogs}}</h2>
                    <h2 class="topic">Blogs</h2>
                </div>
            </div>

            <div class="box border border-3">
                <div class="text">
                    <h2 class="topic-heading"></h2>
                    <h2 class="topic">Events</h2>
                </div>
            </div>

            <div class="box border border-3">
                <div class="text">
                    <h2 class="topic-heading"></h2>
                    <h2 class="topic">Projects</h2>
                </div>
            </div>
        </div>


    </div>
@endsection
