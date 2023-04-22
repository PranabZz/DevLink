@extends('app')
@section('content')
    <section class="section feature" aria-label="feature" id="featured">
        <div class="container">

            <h2 class="headline headline-2 section-title">
                <span class="span">Login</span>
            </h2>

            <p class="section-text">

            </p>
            <h2 class="headline headline-2 section-title">
                <span class="span">Welome, user</span>
                <p style="font-size:20px;">Create a new project and share it with your friends</p>
            </h2>
            <div class="container" style="max-width: 800px; max-height:800px; padding-top:100px;">
                @if ($errors->any())
                    @foreach ($errors->all() as $err)
                        <p class="alert alert-danger">{{ $err }}</p>
                    @endforeach
                @endif
                <form action="{{ route('register.auth') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label>Name <span class="text-danger"></span></label>
                        <input class="form-control" type="text" name="name" value="{{ old('name') }}" />
                    </div><br>
                    <div class="mb-3">
                        <label>Email <span class="text-danger"></span></label>
                        <input class="form-control" type="email" name="email" value="{{ old('username') }}" />
                    </div><br>
                    <div class="mb-3">
                        <label>Password <span class="text-danger"></span></label>
                        <input class="form-control" type="password" name="password" />
                    </div><br>
                    <div class="mb-3">
                        <label>Password Confirmation<span class="text-danger"></span></label>
                        <input class="form-control" type="password" name="password_confirm" />
                    </div><br>
                    <div class="form-footer">
                        <div>
                            <button class="btn btn-primary">Register</button>
                        </div>
                        <div>
                            <a href="{{ route('login') }}">Already have an account?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
