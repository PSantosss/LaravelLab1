<x-app-layout>
    <x-slot name="header">
        <nav>
            <a href="#menu">Menu</a>
        </nav>
    </x-slot>

    <head>
        <title>Forty by HTML5 UP</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <!-- Link to CSS files -->
        <link rel="stylesheet" href="{{ asset('build/assets/css/main.css') }}" />
        <noscript><link rel="stylesheet" href="{{ asset('build/assets/css/noscript.css') }}" /></noscript>
    </head>
    <body class="is-preload">

        <!-- Wrapper -->
        <div id="wrapper">

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
                        <!-- Corrected route for Page 7 -->
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

            <!-- Banner -->
            <section id="banner" class="major">
                <div class="inner">
                    <header class="major">
                        <h1>Formula 1 Top Teams</h1>
                    </header>
                    <div class="content">
                        <p>The place to get information about the current top teams in Formula 1</p>
                        <ul class="actions">
                            <li><a href="#one" class="button next scrolly">Get Started</a></li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Main -->
            <div id="main">

                <!-- One -->
                <section id="one" class="tiles">
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/pic01.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page1') }}" class="link">Red Bull Racing Honda RBPT</a></h3>
                            <p>Max Verstappen | Sergio Perez</p>
                        </header>
                    </article>
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/pic02.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page2') }}" class="link">Mclaren</a></h3>
                            <p>Lando Norris | Oscar Piastri</p>
                        </header>
                    </article>
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/pic03.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page3') }}" class="link">Ferrari</a></h3>
                            <p>Charles Leclerc | Carlos Sainz</p>
                        </header>
                    </article>
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/pic04.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page4') }}" class="link">Mercedes</a></h3>
                            <p>Lewis Hamilton | George Russel</p>
                        </header>
                    </article>
                    <article>
                        <span class="image">
                            <img src="{{ asset('images/pic05.jpg') }}" alt="" />
                        </span>
                        <header class="major">
                            <h3><a href="{{ route('page5') }}" class="link">Aston Martin</a></h3>
                            <p>Fernando Alonso | Lance Stroll</p>
                        </header>
                    </article>
                </section>

                <!-- Two -->
                <section id="two">
                    <div class="inner">
                        <header class="major">
                            <h2>Formula 1 Top Teams</h2>
                        </header>
                        <p>Formula 1 Top Teams was created as a hub to check out information regarding the current top 5 teams in the league.</p>

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
</x-app-layout>
