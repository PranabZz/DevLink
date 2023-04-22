<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>@yield('title', $title)</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>

<body>
    <div class="">
        <header>
            <div class="logosec">
                <div class="logo">
                    <img style="position: relative; height:100px; right:40px;" src="{{ asset('images/logo.png') }}" />
                </div>
            </div>

        </header>

        <div class="main-container">
            @auth
                <div class="navcontainer">
                    <nav class="nav">
                        <div class="nav-upper-options">
                            <div class="nav-option ">
                                <a href="{{ URL('admin/dashboard') }}">
                                    <h5>Dashboard</h5>
                                </a>
                            </div>

                            <div class=" nav-option">
                                <a href="{{ URL('admin/project') }}">
                                    <h5>Projects</h5>
                                </a>
                            </div>
                            <div class=" nav-option">
                                <a href="{{ URL('admin/event') }}">
                                    <h5>Events</h5>
                                </a>
                            </div>
                            <div class="nav-option logout">
                                <a href="{{ route('admin.logout') }}">
                                    <h5>Logout</h5>
                                </a>

                            </div>
                        </div>
                    </nav>
                @endauth
            </div>
            @yield('content')
</body>

</html>
