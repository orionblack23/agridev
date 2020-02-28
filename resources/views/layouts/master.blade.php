<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta name="viewport" content="user-scalable=no, width=device-width, height=device-height, initial-scale=1, maximum-scale=1, minimum-scale=1, minimal-ui" />

    <meta name="theme-color" content="#FCDB5A" />
    <meta name="msapplication-navbutton-color" content="#FCDB5A" />
    <meta name="apple-mobile-web-app-status-bar-style" content="#FCDB5A" />

    <!-- Favicons
		================================================== -->
    <link rel="shortcut icon" href="{{ URL::to('assets/images/favicon.ico') }}">
    <link rel="apple-touch-icon" href="{{ URL::to('assets/images/apple-touch-icon.html') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::to('assets/images/apple-touch-icon-72x72.html') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::to('assets/images/apple-touch-icon-114x114.html') }}">

    <!-- Critical styles
		================================================== -->
    <link rel="stylesheet" href="{{ URL::to('src/styles/critical.min.css') }}" type="text/css">

    <script src="https://kit.fontawesome.com/9f94ee6766.js" crossorigin="anonymous"></script>
    @yield('styles')

    <!-- Load google font
		================================================== -->
    <script type="text/javascript">
        WebFontConfig = {
            google: {
                families: ['Open+Sans:300,400,500,600,700,800', 'Raleway:100,400,400i,500,500i,700,700i,900']
            }
        };
        (function() {
            var wf = document.createElement('script');
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(wf, s);
        })();
    </script>

    <!-- Load other scripts
		================================================== -->
    <script type="text/javascript">
        var _html = document.documentElement,
            isTouch = (('ontouchstart' in _html) || (navigator.msMaxTouchPoints > 0) || (navigator.maxTouchPoints));

        _html.className = _html.className.replace("no-js", "js");
        _html.classList.add(isTouch ? "touch" : "no-touch");
    </script>
    <script type="text/javascript" src="{{ URL::to('src/js/device.min.js') }}"></script>
</head>

<body>
    <div id="app">
        @include('partials.header')

        @yield('content')

        @include('partials.footer')

        <script src="{{ URL::to('src/ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js') }}"></script>
        <script>
            window.jQuery || document.write(`<script src="{{ URL::to('src/js/jquery-2.2.4.min.js') }}"><\/script>`)
        </script>

        <script type="text/javascript" src="{{ URL::to('src/js/main.min.js') }}"></script>
        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b, o, i, l, e, r) {
                b.GoogleAnalyticsObject = l;
                b[l] || (b[l] =
                    function() {
                        (b[l].q = b[l].q || []).push(arguments)
                    });
                b[l].l = +new Date;
                e = o.createElement(i);
                r = o.getElementsByTagName(i)[0];
                e.src = "{{ URL::to('src/www.google-analytics.com/analytics.js') }}";
                r.parentNode.insertBefore(e, r)
            }(window, document, 'script', 'ga'));
            ga('create', 'UA-XXXXX-X', 'auto');
            ga('send', 'pageview');
        </script>

        @yield('scripts')
    </div>
</body>

</html>