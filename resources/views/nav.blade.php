<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    - primary meta tags
  -->
    <title>Devlink</title>
    <meta name="title" content="Wren - Perosonal Blog Website">
    <meta name="description" content="This is a blog html template made by codewithsadee">

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!--
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <link href="{{ asset('css/appchange.css') }}" rel="stylesheet">
    <script src="{{ asset('js/app.js') }}" defer></script>


   


    <!--
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">
    <link rel="preload" as="image" href="./assets/images/pattern-2.svg">
    <link rel="preload" as="image" href="./assets/images/pattern-3.svg">

</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <nav class="navbar" data-navbar>

                <div class="navbar-top">
                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                @guest
                    <ul class="navbar-list">

                        <li>
                            <a>Devlink</a>
                        </li>
                    </ul>
                @endguest
                @auth
                    <ul class="navbar-list">

                        <li>
                            <a href="{{route('index')}}" class="navbar-link hover-1" data-nav-toggler>Home</a>
                        </li>

                        <li>
                            <a href="{{route('project')}}" class="navbar-link hover-1" data-nav-toggler>Projects</a>
                        </li>

                        <li>
                            <a href="#featured" class="navbar-link hover-1" data-nav-toggler>Events</a>
                        </li>

                        <li>
                            <a href="{{route('blog')}}" class="navbar-link hover-1" data-nav-toggler>Blogs</a>
                        </li>

                        <li>
                            <a href="{{route('contacts')}}" class="navbar-link hover-1" data-nav-toggler>Contact</a>
                        </li>

                    </ul>

                    <div class="navbar-bottom">

                        <div class="profile-card">
                            <img src="./assets/images/author-1.png" width="48" height="48" alt="Steven"
                                class="profile-banner">

                            <div>
                                <p class="card-title">Hello Steven !</p>
                            </div>
                        </div>

                        <ul class="link-list">

                            <li>
                                <a href="#" class="navbar-bottom-link hover-1">Profile</a>
                            </li>

                            <li>
                                <a href="#" class="navbar-bottom-link hover-1">Articles Saved</a>
                            </li>

                            <li>
                                <a href="#" class="navbar-bottom-link hover-1">Add New Post</a>
                            </li>

                            <li>
                                <a href="#" class="navbar-bottom-link hover-1">My Likes</a>
                            </li>

                            <li>
                                <a href="#" class="navbar-bottom-link hover-1">Account Setting</a>
                            </li>

                            <li>
                                <a href="#" class="navbar-bottom-link hover-1">Sign Out</a>
                            </li>

                        </ul>

                    @endauth
            </nav>
            @auth
            <a href="{{route('user.logout')}}" class="btn btn-primary">Logout</a>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
            </button>
            @endauth
        </div>
    </header>
