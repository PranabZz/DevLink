@extends('app')
@section('content')
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
                <a href="{{route('project.view',[$project->project_slug,$project->project_id,$project->user_id])}}">
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
                </a>
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
@endsection
