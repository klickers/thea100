<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') | Exploring Theater</title>

        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css" />
    </head>
    <body>
        <!-- Navigation Sidebar -->
        <nav id="main-nav" class="side-nav">
            <!-- Logo -->
            <a href="/">
                <div class="title" id="logo">
                    <p>Theater</p>
                </div>
            </a>
            <!-- Navigation Links -->
            <div class="nav-links">
                <ul>
                    <a class="main-sidebar-link" href={{ route('genres') }}><li>Genres</li></a>
                    <a class="main-sidebar-link" href="#!" id="part1-link"><li>Part 1</li></a>
                </ul>
            </div>
            <!-- Credits -->
            <div id="credits">
                <p>Written & created by Catherine Chen.</p>
            </div>
        </nav>
        <div class="side-nav-whitespace"></div>

        @yield('content')

        <!-- Feather Icons -->
        <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
        <script>
            feather.replace()
        </script>
    </body>
</html>