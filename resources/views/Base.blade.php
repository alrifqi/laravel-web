<!DOCTYPE html>
<html>
    <head>
        <title>Alrifqi</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="css/flat-ui.min.css" rel="stylesheet" type="text/css">
        <link href="plugins/slick/slick.css" rel="stylesheet" type="text/css">
        <link href="plugins/slick/slick-theme.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/style-responsive.css" rel="stylesheet" type="text/css">
        <link href="css/ownstyle.css" rel="stylesheet" type="text/css">
        @yield('asset_header')
    </head>
    <body style="background-color: #34495e">
        <header class="header-frontend">
            <div class="navbar navbar-default navbar-static-top">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/laravel-web/public">Flat<span>Lab</span></a>
                    </div>
                    <div class="navbar-collapse collapse pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="about">About</a></li>
                            <li class="dropdown ">
                                <a href="#" class="dropdown-toggle " data-toggle="dropdown" data-hover="dropdown" data-delay="0" data-close-others="false">Feature <b class=" icon-angle-down"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li><a href="button.html">Buttons</a></li>
                                </ul>
                            </li>
                            <li><a href="portfolio.html">Portfolio</a></li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="fullwidthbanner-container main-slider">
            <div class="fullwidthbanner">
                <img src="images/banner_bg.jpg" width="100%">
            </div>
        </div>

        @yield('content')

    <script src="js/jQuery-1.11.2.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="plugins/slick/slick.min.js" type="text/javascript"></script>
    <script src="js/common-scripts.js" type="text/javascript"></script>
    @yield('asset_footer')
    </body>
</html>
