<!DOCTYPE HTML>
<html>
    <head>
        <title>Generic - Forty by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="{{ asset('build/assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('build/assets/css/noscript.css') }}" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

            <!-- Header -->
            <header id="header">
                <a href="{{ url('/') }}" class="logo"><strong>FORMULA 1</strong> <span>TOP TEAMS</span></a>
                <nav>
                    <a href="#menu">Menu</a>
                </nav>
            </header>

            <!-- Menu -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ route('page1') }}">Red Bull</a></li>
                    <li><a href="{{ route('page2') }}">Mclaren</a></li>
                    <li><a href="{{ route('page3') }}">Ferrari</a></li>
                    <li><a href="{{ route('page4') }}">Mercedes</a></li>
                    <li><a href="{{ route('page5') }}">Aston Martin</a></li>
                </ul>
                <ul class="actions stacked">
                    @auth
                        <li><a href="{{ url('/dashboard') }}" class="button primary fit">Dashboard</a></li>
                        <li><a href="{{ url('/page6') }}" class="button primary fit">PROFILE</a></li>
                        <!-- Fix for Page 7 with user ID -->
                        <li><a href="{{ route('page7', ['id' => Auth::user()->id]) }}" class="button primary fit">Page 7</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}" class="inline">
                                @csrf
                                <button type="submit" class="button fit">Log Out</button>
                            </form>
                        </li>
                    @else
                        <li><a href="{{ route('login') }}" class="button fit">Log In</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="button fit">Register</a></li>
                        @endif
                    @endauth
                </ul>
            </nav>

            <!-- Main -->
            <div id="main" class="alt">

                <!-- One -->
                <section id="one">
                    <div class="inner">
                        <header class="major">
                            <h1>Mercedes</h1>
                        </header>
                        <span class="image main"><img src="{{ asset('images/mercedes.png') }}" alt="Mercedes Logo" style="width: 200px; height: auto;">
                        </span>
                        <p>The Mercedes-AMG Petronas Formula One Team, widely known as Mercedes F1, has established itself as a dominant force in Formula 1. Competing in the championship since 2010, the team has been renowned for its cutting-edge technology, exceptional engineering, and strategic prowess. Mercedes F1 secured consecutive Constructors' Championships from 2014 to 2020, driven by the remarkable performances of drivers like Lewis Hamilton and Nico Rosberg. With a reputation for excellence and innovation, Mercedes F1 continues to be a powerhouse in the sport, embodying both speed and precision on the track.</p>
                        </div>
                </section>

            </div>


            <!-- Footer -->
            <footer id="footer">
                <div class="inner">
                    <ul class="copyright">
                        <li>&copy; Formula 1 Top Teams</li><li>Made by: Paolo Santos</li>
                    </ul>
                </div>
            </footer>

        </div>

        <!-- Scripts -->
        <script src="{{ asset('build/assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/jquery.scrolly.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/jquery.scrollex.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/browser.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/breakpoints.min.js') }}"></script>
        <script src="{{ asset('build/assets/js/util.js') }}"></script>
        <script src="{{ asset('build/assets/js/main.js') }}"></script>

    </body>
</html>
