@extends('app')
@section('content')
<section class="section feature" aria-label="feature" id="featured">
    <div class="container">

        <h2 class="headline headline-2 section-title">
            <span class="span">{{$viewProject->project_title}}</span>
        </h2>

        <p class="section-text">

        </p>

        <div class="blog-post">

            <figure class="card-banner img-holder" style="--width: 1602; --height: 903;">
            <img src="{{asset('images/'. $viewProject->thumbnail)}}" width="1602" height="903" loading="lazy"
                    alt="Self-observation is the first step of inner unfolding" class="img-cover">
            </figure>

            <div class="card-content">

                <div class="card-wrapper">
                    <div class="card-tag">
                        <a href="#" class="btn btn-primary ">{{$viewProject->category}}</a>
                    </div>

                    <div class="wrapper">
                        <ion-icon name="time-outline" aria-hidden="true"></ion-icon>

                        <span class="span">3 mins read</span>
                    </div>
                </div>

                <h3 class="headline headline-3">
                    <a href="#" class="card-title hover-2">
                        {{$viewProject->project_slug}}
                    </a><br>
                </h3>
                <div>
                    <p>{!!$viewProject->description!!}</p>
                </div><br>

                <div class="card-wrapper">
                    
                    <div class="profile-card">
                        <img src="{{asset('images/images.png')}}" width="48" height="48" loading="lazy"
                            alt="Joseph" class="profile-banner">

                        <div>
                            <p class="card-title">{{$viewProject->user->name}}</p>

                            <p class="card-subtitle">25 Nov 2022</p>
                        </div>
                    </div>

                    <a href="{{route('message',$viewProject->user->name)}}" class="card-btn btn-primary">Apply</a>

                </div>

            </div>

        </div>

        <img src="{{asset('images/shadow-3.svg')}}" width="500" height="1500" loading="lazy" alt=""
            class="feature-bg">

</section>
@endsection
