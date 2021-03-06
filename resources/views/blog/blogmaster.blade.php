<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>ShopSwift | Goods delivered to you in minutes</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Bitter|Fira+Sans|Alegreya+Sans+SC|Spectral|Kalam|Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/Pretty-Footer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/SwiftStyle.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ asset('icons/SSFavicon.jpg') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!--Digital Marketing-->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-101448279-1', 'auto');
        ga('send', 'pageview');

    </script> <!---Google Analytics-->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:564449,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script><!---HotJar--->

</head>
<body>
<div class="blog-intro">
    <div class="blog-message">
        <div class="container">
            <div class="row">
                <div class="col-lg-offset-4 col-xs-offset-3">
                    <img id="blog-logo" class="img-responsive" src="{{asset('images/ShopSwiftLogo.png')}}"/>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 text-center">
                    <h2>The <i style="color: #00a5ff;">Swift</i> Blog</h2>
                    <h3 id="blog-para">Fashion. Lifestyle. Business. We've got you covered.</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blog-navbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('blog')}}">Blog</a></li>
                    <li><a href="{{route('about')}}">About</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

@yield('blog')

</body>
</html>