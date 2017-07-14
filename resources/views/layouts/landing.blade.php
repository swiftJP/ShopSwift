<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>ShopSwift | Goods delivered to you in minutes</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/landing.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="{{ asset('icons/SSFavicon.jpg') }}">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!---Analytics--->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-101448279-1', 'auto');
        ga('send', 'pageview');
    </script><!--Google-->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:564449,hjsv:5};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
    </script><!-- Hotjar-->


</head>

<body>

 <header class="landing-intro">
    <div class="landing-message backdrop">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <img class="img-responsive" id="logo" src="{{asset('images/ShopSwiftLogo.png')}}"/>
                </div>
            </div>


            <div class="col-lg-12">
                <h3 id="headline">The quicker, more convenient way to shop </h3>
                <h3 id="headline-para">Bringing you your goods from your favourite high street stores on demand. Drop your email below to be the first to know when we're launching!</h3>
                    <form method="post" action="{{route('list')}}">
                        {{ csrf_field() }}
                        <div class="col-md-6 col-md-offset-3 col-xs-12">
                            <div class="input-group">
                                <input type="text" name="email" id="email" class="form-control" placeholder="Email">
                                <span class="input-group-btn">
                                    <button class="btn btn-info" id="notify" type="submit">Notify Me</button>
                                </span>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 col-xs-10 col-xs-offset-1">
                    <h2 id="notify-message" class="hidden"><span class="glyphicon glyphicon-ok-circle"></span>Successfully Added!</h2>
                </div>
            </div>
        </div>
        </div>
 </header>

<script>
    $(document).ready(function() {
        $("#notify").click(function(){
            $("#notify-message").removeClass('hidden')
        })
    });
</script>
</body>
</html>