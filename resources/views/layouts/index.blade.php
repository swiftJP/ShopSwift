
@extends('layouts.app')

@section('content')
<div class="intro-header">
    <div class="jumbotron intro-message">
        <h2>The quicker, faster way to shop</h2>
        <p>Order online and have anything you desire delivered to <strong>you</strong> in minutes</p>
        <p></p>
        <form method="post" action="{{route('order')}}" class="require-validation"  data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj">
            {!!csrf_field()!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row order_inputs">
                <div class="col-lg-8 col-lg-offset-2">
                    <input class="form-control input-lg" type="text" name="delivery_items" required="" placeholder="What would you like? e.g. Half Chicken and Chips from Nandos">
                </div>
                <div class="col-lg-8 col-lg-offset-2">
                    <input class="form-control input-lg" type="text" name="delivery_address" required="" placeholder="Where should we deliver it to? eg William Morris Halls or LE11 3BS">
                </div>

                <div class="col-lg-4 col-lg-offset-4">
                    <select class="form-control input-lg" name="delivery_time" required="">
                        <option class="options">ASAP</option>
                        <option class="options">2 hours</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-info btn-lg" id="customButton" type="submit">Shop<strong>Swift</strong> <i class="glyphicon glyphicon-shopping-cart"></i></button>
                </div>
            </div>
        </form>
    </div>
</div>
<div class="process">
    <div class="container">
        <h1 id="process" style="font-size:47px;">Process </h1>
        <div class="row process-steps">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="glyphicon glyphicon-shopping-cart"></i>
                <p>Shop online from a variety of local shops </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="glyphicon glyphicon-time"></i>
                <p>Order and have your goods delivered in as less than an hour (or schedule for later delivery) </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="glyphicon glyphicon-home"></i>
                <p>Sit back and wait whilst your goods are delivered to you! </p>
            </div>
        </div>
    </div>
</div>
<div class="most-popular">
    <h1>Your favourites, delivered by us</h1>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="{{asset('images/primark.jpg')}}"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Primark</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="{{asset('images/aldi.jpg')}}"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Aldi</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="{{asset('images/tesco.jpg')}}"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Tesco</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="{{asset('images/McDonalds.jpg')}}"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">McDonalds</h3></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="{{asset('images/kfc.jpg')}}"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">KFC</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="{{asset('images/iceland.jpg')}}"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Iceland</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="{{asset('images/topshop.jpg')}}"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Topshop</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="{{asset('images/99pstores.jpg')}}"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">99p Stores</h3></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="newsletter">
    <div class="row">
        <div class="col-lg-12">
            <h2>Newsletter </h2>
            <h3>Subscribe to our newsletter to recieve our latest ShopSwift news</h3></div>
    </div>
    <div class="row">
        <div class="col-lg-7 col-lg-offset-2">
            <form>
                <input class="form-control" type="text" placeholder="Enter your email">
            </form>
        </div>
        <div class="col-lg-1">
            <button class="btn btn-primary btn-lg" type="submit">Subscribe </button>
        </div>
    </div>
</div>
<footer>
    <div class="row">
        <div class="col-md-4 col-sm-6 footer-navigation">
            <h3><a href="#"><img class="img-responsive" src="{{asset('images/ShopSwiftLogo.png')}}" alt="ShopSwift"></a></h3>
            <p class="links"><a href="#">Home</a><strong> · </strong><a href="#">Blog</a><strong> · </strong><a href="#">Legal </a><strong> · </strong><a href="#">About</a><strong> · </strong><a href="#">FAQ </a><strong> · </strong><a href="#">Contact</a></p>
            <p class="company-name">ShopSwift Deliveries Ltd© 2017</p>
        </div>
        <div class="col-md-4 col-sm-6 footer-contacts">
            <div><span class="fa fa-map-marker footer-contacts-icon"> </span>
                <p>Loughborough, Leicestershire</p>
            </div>
            <div><i class="fa fa-phone footer-contacts-icon"></i>
                <p class="footer-center-info email text-left"> +44 797 214 9992</p>
            </div>
            <div><i class="fa fa-envelope footer-contacts-icon"></i>
                <p> <a href="#" target="_blank">info@shopswift.co.uk</a></p>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 footer-about">
            <h4>About the company</h4>
            <p>At ShopSwift we have one mission; supplying you with all your favourite goods from your favourite shops in minutes.</p>
            <div class="social-links social-icons"><a href="https://www.facebook.com/ShopSwiftDeliveries/"><i class="fa fa-facebook"></i></a><a href="https://twitter.com/ShopSwift1"><i class="fa fa-twitter"></i></a><a href="https://www.linkedin.com/company/shopswift"><i class="fa fa-linkedin"></i></a></div>
        </div>
    </div>
</footer>
@endsection

@section('scripts')
    <script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection


