@extends('app')
@section('content')
    <main>
        <section class="section feature" aria-label="feature" id="featured">
            <div class="container">

                <h2 class="headline headline-2 section-title">
                    <span class="span">Login</span>
                </h2>

                <p class="section-text">

                </p>
                <h2 class="headline headline-2 section-title">
                    <span class="span">Welome, user</span>
                </h2>
                <div class="container" style="max-width: 800px; max-height:800px; padding-top:40px;">

                    @if (session('success'))
                        <p class="alert alert-success">{{ session('success') }}</p>
                    @endif
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert alert-danger">{{ $err }}</p>
                        @endforeach
                    @endif
                    <form action="{{ route('admin.login.auth') }}" method="POST" class="form">
                        @csrf

                        <label>Username
                            <input type="text" type="name" name="name" placeholder="Username" />
                        </label><br>
                        <label>Password
                            <input placeholder="Password" type="password" name="password" />
                        </label><br>
                        <div class="form-footer">
                            <div>
                                <button class="btn btn-primary">Login</button>
                            </div>
                            <div>
                                <a href="{{ route('register') }}">Create a new account?</a>
                            </div>
                        </div>
                    </form>
                </div>

        </section>

        </article>
    </main>
@endsection
