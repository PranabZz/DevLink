@extends('app')
@section('content')
    <section class="section recent-post" id="recent" aria-labelledby="recent-label">
        <div class="container">

            <div class="post-main">

                <h2 class="headline headline-2 section-title">
                    <span class="span">Recent posts</span>
                </h2>

                <p class="section-text">
                    Don't miss the latest trends
                </p>

                <ul class="grid-list">
                    @foreach ($blogs as $blog)
                        <a href="{{route('show',$blog->blog_id)}}">
                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="{{ asset('images/' . $blog->blog_thumbnail) }}" width="271"
                                            height="258" loading="lazy" alt="" class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">{{ $blog->blog_category }}</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">{{ $blog->blog_title }}</a>
                                        </h3>



                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2">{{ $blog->blog_views }}</a>

                                                <span class="span">{{ $blog->blog_author }}</span>

                                                <div class="wrapper">
                                                    <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                    <span class="span">3 mins read</span>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                            </li>
                        </a>
                    @endforeach
                </ul>

            </div>
    </section>
@endsection
