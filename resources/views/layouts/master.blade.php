@include('mango_text_logo')
<!DOCTYPE HTML>
<html>
    <head>
        <title>@yield('title')</title>
        <link rel="icon" type="image/png" href="/img/logo_alone.png">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:image" content="http://mangohacks.com/img/fb_splash2.jpg">
        <meta property="og:site_name" content="MangoHacks">
        <meta property="og:url" content="http://mangohacks.com" />
        <meta name="description" content="MangoHacks is a 36-hour Hackathon at Florida International University">
        <meta id="token" name="token" content="{{ csrf_token() }}">
        <link type="text/css" rel="stylesheet" href="/css/app.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900' rel='stylesheet' type='text/css'>
        @yield('head_actions')
    </head>
<body>
    <div class="nav">
        <div class="container">
            @yield('menu')
        </div>
    </div>


    @yield('content')

    <div class="footer">
      <div class="container">
        <div class="social_media">
            <a target="_blank" href="https://www.facebook.com/MangoHacks">
                <i class="fa fa-facebook-official"></i>
            </a>
            <a target="_blank" href="https://twitter.com/fiumangohacks">
                <i class="fa fa-twitter"></i>
            </a>
        </div>
        &copy; MangoHacks.com
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/main.js"></script>

    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-70426794-1', 'auto');
        ga('send', 'pageview');

    </script>
</body>
</html>