<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Boolean Forum</title>

        <!-- Styles -->
        <style>
            html, body {
                color: white;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
            }

            .title {
                width: 75%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .title img {
                width: 100%;
            }

            .links > a {
                color: white;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover {
                color: #00e165;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body class="my-bg">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links d-flex">
                    @auth
                        <a href="/contact">Contattaci</a>
                        <a class="nav-link" href="{{ url('/') }}">Home</a>
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            Logout
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                    @else
                        <a href="/contact">Contattaci</a>
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class=" w-50 title m-b-md">
                    <img  src="https://i.ibb.co/F3Wvjqb/boolean-forum.png" alt="Boolean Forum Logo">
                </div>

                <div class="links">
                    <a href="{{route('posts.index')}}">--All Posts--</a>
                </div>
                <div class="links">
                    <a href="{{route('categories.index')}}">--Categories--</a>
                </div>
                <div class="links">
                    <a href="{{route('tags.index')}}">--Tags--</a>
                </div>
            </div>
        </div>
    </body>
</html>
