<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">

    <title>Chelsea Nicole Mukhanyi - @yield('title', 'Portfolio')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/cvicon.png') }}">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900|Oswald:300,400,700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/portfolio.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/scroll.css') }}">

    <!-- JavaScript loaded in the head -->
    <script src="{{ asset('assets/js/jquery-2.0.3.min.js') }}"></script>
    <script src="{{ asset('assets/js/sendemail.js') }}"></script>
    <script src="{{ asset('assets/js/progressbar.js') }}"></script>
    <script src="{{ asset('assets/js/modernizr.custom.js') }}"></script>

    @stack('styles')
</head>

<body>

<div id="container" class="container">
    @yield('content')
</div>

<!-- Core Scripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/head.min.js') }}"></script>

<!-- Portfolio -->
<script src="{{ asset('assets/js/imagesloaded.min.js') }}"></script>
<script src="{{ asset('assets/js/masonry.min.js') }}"></script>
<script src="{{ asset('assets/js/class_helper.js') }}"></script>
<script src="{{ asset('assets/js/grid_gallery.js') }}"></script>

<script>
    if (document.getElementById('grid-gallery')) {
        new CBPGridGallery(document.getElementById('grid-gallery'));
    }
</script>

<!-- Plugins -->
<script src="{{ asset('assets/js/carousel.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easypiechart.js') }}"></script>
<script src="{{ asset('assets/js/text.rotator.js') }}"></script>

<!-- Page Scrolling -->
<script>
    head.js(
        { mousewheel: "{{ asset('assets/js/jquery.mousewheel.js') }}" },
        { mwheelIntent: "{{ asset('assets/js/mwheelIntent.js') }}" },
        { jScrollPane: "{{ asset('assets/js/jquery.jscrollpane.min.js') }}" },
        { history: "{{ asset('assets/js/jquery.history.js') }}" },
        { stringLib: "{{ asset('assets/js/core.string.js') }}" },
        { easing: "{{ asset('assets/js/jquery.easing.1.3.js') }}" },
        { smartresize: "{{ asset('assets/js/jquery.smartresize.js') }}" },
        { page: "{{ asset('assets/js/jquery.page.js') }}" }
    );
</script>

<!-- Misc -->
<script src="{{ asset('assets/js/jquery.fitvids.js') }}"></script>
<script src="{{ asset('assets/js/settings.js') }}"></script>

@stack('scripts')

</body>
</html>