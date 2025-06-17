<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
<META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
<title>Chelsea Nicole Mukhanyi - @yield('title', 'Portfolio')</title>
<link rel="shortcut icon" href="favicon.ico">

<!-- Google Font-->
<link href='http://fonts.googleapis.com/css.family=Roboto:400,300italic,300,100italic,100,400italic,500,500italic,700,900,900italic,700italic%7COswald:400,300,700' rel='stylesheet' type='text/css'>
<!-- Design Style -->
<link rel="stylesheet" type="text/css" href="{{asset('css/scroll.css')}}" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<!-- Icon -->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
<!-- Portfolio Thumbnail / Slider -->
<link rel="stylesheet" type="text/css" href="css/portfolio.css" />
<link rel="stylesheet" type="text/css" href="css/carousel.css">
<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="css/responsive.css" />
<!-- Pie Chart / Skills -->
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<!-- Send Email -->
<script type="text/javascript" src="js/sendemail.js"></script>
<!-- Progressbar / Skills-->
<script type="text/javascript" src="js/progressbar.js"></script>
<!-- Portfolio-->
<script src="js/modernizr.custom.js"></script>
</head>
<body>
<div id="container" class="container">
    @yield('content')

</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/head.min.js"></script>
<!-- Portfolio Thumbnail -->
<script type="text/javascript" src="js/imagesloaded.min.js"></script>
<script type="text/javascript" src="js/masonry.min.js"></script>
<script type="text/javascript" src="js/class_helper.js"></script>
<script type="text/javascript" src="js/grid_gallery.js"></script>
<!-- Portfolio Grid -->
<script>
    new CBPGridGallery( document.getElementById( 'grid-gallery' ) );
</script>
<!-- Portfolio Slider-->
<script type="text/javascript"  src="js/carousel.js"></script>
<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
<script type="text/javascript" src="js/text.rotator.js"></script>
<!-- Page Scrolling -->
<script>
head.js(
		{ mousewheel : "js/jquery.mousewheel.js" },
		{ mwheelIntent : "js/mwheelIntent.js" },
		{ jScrollPane : "js/jquery.jscrollpane.min.js" },
		{ history : "js/jquery.history.js" },
		{ stringLib : "js/core.string.js" },
		{ easing : "js/jquery.easing.1.3.js" },
		{ smartresize : "js/jquery.smartresize.js" },
		{ page : "js/jquery.page.js" }
		);
</script>
<!-- Fit Video -->
<script type="text/javascript"  src="js/jquery.fitvids.js"></script>
<!-- All Javascript Component-->
<script src="js/settings.js"></script>
</body>
</html>
