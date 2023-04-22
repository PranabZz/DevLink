@extends('app')
@section('content')
    <main>
        <article>
            <section class="hero" id="home" aria-label="home">
                <div class="container">

                    <div class="hero-content">

                        <p class="hero-subtitle">Hello Developers!</p>

                        <h1 class="headline headline-1 section-title">
                            This is <span class="span">your space</span>
                        </h1>

                        <p class="hero-text">
                            Make new projects with the help of other developers around the world !
                        </p>
                    </div>
                </div>
            </section>

            <!--
                        - #TOPICS
                      -->

            <section class="topics" id="topics" aria-labelledby="topic-label">
                <div class="container">

                    <div class="card topic-card">

                        <div class="card-content">

                            <h2 class="headline headline-2 section-title card-title" id="topic-label">
                                Upcomming events
                            </h2>

                            <p class="card-text">
                                Don't miss out on the upcoming events happening near you </p>



                        </div>

                        <div class="slider" data-slider>
                            <ul class="slider-list" data-slider-container>

                                <li class="slider-item">
                                    @foreach($events as $event)
                                    <a href="#" class="slider-card">
                                        <figure class="slider-banner img-holder" style="height:250px; width:250px;">
                                            <img src="{{asset('images/'.$event->event_thumbnail)}}" 
                                                loading="lazy" alt="Sport" class="img-cover" style="">
                                        </figure>

                                        <div class="slider-content">
                                            <span class="slider-title">{{$event->event_title}}</span>

                                            <p class="slider-subtitle">{{$event->event_fees}}</p>
                                        </div>

                                    </a>
                                </li>
                                @endforeach

                            </ul>
                        </div>

                    </div>

                </div>
            </section>





            <!--
                        - #FEATURED PROJECT
                      -->

            <section class="section feature" aria-label="feature" id="featured">
                <div class="container">

                    <h2 class="headline headline-2 section-title">
                        <span class="span">Projects</span>
                    </h2>

                    <p class="section-text">
                        Featured and highly rated Projects to work
                    </p>

                    <ul class="feature-list">
                        @foreach ($projects as $project)
                      
                        <li>
                            <div class="card feature-card">

                                <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
                                    <img src="{{asset('images/'.$project->thumbnail)}}" width="1602" height="903"
                                        loading="lazy" alt="Self-observation is the first step of inner unfolding"
                                        class="img-cover">
                                </figure>

                                <div class="card-content">

                                    <div class="card-wrapper">
                                        <div class="card-tag">
                                            <a href="#" class="span hover-2"># {{$project->category}} </a>
                                        </div>

                                        <div class="wrapper">
                                            <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                            <span class="span">3 mins read</span>
                                        </div>
                                    </div>

                                    <h3 class="headline headline-3">
                                        <a href="#" class="card-title hover-2">
                                            {{$project->project_title}}
                                        </a>
                                    </h3>

                                    <div class="card-wrapper">

                                        <div class="profile-card">
                                            <img src="{{asset('images/images.png')}}" width="48" height="48"
                                                loading="lazy"  class="profile-banner">

                                            <div>
                                                <p class="card-title">{{$project->user->name}}</p>

                                                <p class="card-subtitle">25 Nov 2022</p>
                                            </div>
                                        </div>

                                        <a href="#" class="card-btn">Read more</a>

                                    </div>

                                </div>

                            </div>
                        </li>
                        @endforeach
                    </ul>

                    <a href="{{route('project.index')}}" class="btn btn-secondary">
                        <span class="span">Show More Posts</span>

                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

                </div>

                <div class="feature-bg">
                    <svg width="541" height="993" viewBox="0 0 541 993" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g opacity="0.15" filter="url(#filter0_f_42_1703)">
                            <ellipse cx="506.5" cy="496.5" rx="256.5" ry="246.5"
                                fill="url(#paint0_linear_42_1703)" />
                        </g>
                        <defs>
                            <filter id="filter0_f_42_1703" x="0" y="0" width="1013" height="993"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feBlend mode="normal" in="SourceGraphic" in2="BackgroundImageFix" result="shape" />
                                <feGaussianBlur stdDeviation="125" result="effect1_foregroundBlur_42_1703" />
                            </filter>
                            <linearGradient id="paint0_linear_42_1703" x1="280.327" y1="743" x2="824.387"
                                y2="665.359" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#0EA5EA" />
                                <stop offset="1" stop-color="#0BD1D1" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
            </section>
            <!--
                        - #RECENT POST
                      -->

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

                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="./assets/images/recent-post-1.jpg" width="271" height="258"
                                            loading="lazy" alt="Helpful Tips for Working from Home as a Freelancer"
                                            class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">Working Tips</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">Helpful Tips for Working from Home as a
                                                Freelancer</a>
                                        </h3>

                                        <p class="card-text">
                                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland
                                            moral misheard
                                            roadrunner flapped lynx far that and jeepers giggled far and far
                                        </p>

                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2"># Travel</a>

                                                <a href="#" class="span hover-2"># Lifestyle</a>
                                            </div>

                                            <div class="wrapper">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">3 mins read</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="./assets/images/recent-post-4.jpg" width="271" height="258"
                                            loading="lazy" alt="Helpful Tips for Working from Home as a Freelancer"
                                            class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">Working Tips</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">Helpful Tips for Working from Home as a
                                                Freelancer</a>
                                        </h3>

                                        <p class="card-text">
                                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland
                                            moral misheard
                                            roadrunner flapped lynx far that and jeepers giggled far and far
                                        </p>

                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2"># Travel</a>

                                                <a href="#" class="span hover-2"># Lifestyle</a>
                                            </div>

                                            <div class="wrapper">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">3 mins read</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="recent-post-card">

                                    <figure class="card-banner img-holder" style="--width: 271; --height: 258;">
                                        <img src="./assets/images/recent-post-5.jpg" width="271" height="258"
                                            loading="lazy" alt="Helpful Tips for Working from Home as a Freelancer"
                                            class="img-cover">
                                    </figure>

                                    <div class="card-content">

                                        <a href="#" class="card-badge">Working Tips</a>

                                        <h3 class="headline headline-3 card-title">
                                            <a href="#" class="link hover-2">Helpful Tips for Working from Home as a
                                                Freelancer</a>
                                        </h3>

                                        <p class="card-text">
                                            Gosh jaguar ostrich quail one excited dear hello and bound and the and bland
                                            moral misheard
                                            roadrunner flapped lynx far that and jeepers giggled far and far
                                        </p>

                                        <div class="card-wrapper">
                                            <div class="card-tag">
                                                <a href="#" class="span hover-2"># Travel</a>

                                                <a href="#" class="span hover-2"># Lifestyle</a>
                                            </div>

                                            <div class="wrapper">
                                                <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                                                <span class="span">3 mins read</span>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </li>

                        </ul>

                    </div>

                    <div class="post-aside grid-list">

                        <div class="card aside-card">

                            <h3 class="headline headline-2 aside-title">
                                <span class="span">Popular Posts</span>
                            </h3>

                            <ul class="popular-list">

                                <li>
                                    <div class="popular-card">

                                        <figure class="card-banner img-holder" style="--width: 64; --height: 64;">
                                            <img src="./assets/images/popular-post-1.jpg" width="64" height="64"
                                                loading="lazy" alt="Creating is a privilege but it’s also a gift"
                                                class="img-cover">
                                        </figure>

                                        <div class="card-content">

                                            <h4 class="headline headline-4 card-title">
                                                <a href="#" class="link hover-2">Creating is a privilege but it’s
                                                    also a gift</a>
                                            </h4>

                                            <div class="warpper">
                                                <p class="card-subtitle">15 mins read</p>

                                                <time class="publish-date" datetime="2022-04-15">15 April 2022</time>
                                            </div>

                                        </div>

                                    </div>
                                </li>
                            </ul>

                        </div>

                    </div>
            </section>

        </article>
    </main>
@endsection
