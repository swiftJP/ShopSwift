
@extends('layouts.app')

@section('content')
<div class="intro-header">
    <div class="jumbotron intro-message">
        <h1>The quicker way to shop</h1>
        <h4>Delivering the brands you love from your favourite stores, <strong>FAST</strong></h4>
        <h3 id="intro-comment">We'll shop and pick up anything you favourite high street stores and have it delivered to <strong>you</strong> in minutes</h3>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{url('stores')}}"><button class="btn btn-danger btn-lg" id="intro-btn">See Stores</button></a>
            </div>
        </div>
    </div>
</div>

<div class="info">
    <div class="container">
        <h1>Why ShopSwift?</h1>
        <div class="row">
            <div class="col-xs-4">
                <div class="thumbnail">
                    <img class="img-circle" src="https://static.pexels.com/photos/264554/pexels-photo-264554.jpeg"/>
                    <h3 class="text-center">Brands you love</h3>
                    <hr class="line">
                    <h4 class="process-comments">We partner with more stores to give you the best selection of stores at your fingertips. New partners and items are being added all the time, so keep checking the website.</h4>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="thumbnail">
                    <img class="img-circle" src="https://static.pexels.com/photos/9235/road-traffic-car-business.jpg"/>
                    <h3 class="text-center">A speedy delivery</h3>
                    <hr class="line">
                    <h4 class="process-comments">We have a large army of SwiftShoppers eagerly awaiting to serve you on-demand. With an average delivery time of 39 minutes, there's never been a swifter way to shop</h4>
                </div>
            </div>

            <div class="col-xs-4">
                <div class="thumbnail">
                    <img class="img-circle" src="https://static.pexels.com/photos/5329/person-woman-apple-hotel.jpg"/>
                    <h3 class="text-center">At your service</h3>
                    <hr class="line">
                    <h4 class="process-comments">Our SwiftShoppers (your own personal shopper) are the backbone of our business, ensuring you get the quality goods you want, fast.</h4>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="newsletter">
    <div class="newsletter-frame">
        <div class="row">
            <div class="col-lg-12">
                <h2>Newsletter</h2>
                <h3>Receive the latest ShopSwift news and be notified when we're in your area</h3></div>
        </div>
        <div class="row">
            <div class="col-lg-7 col-lg-offset-2">
                <form>
                    <input class="form-control" type="text" placeholder="Enter your email">
                </form>
            </div>
            <div class="col-lg-1">
                <button class="btn btn-primary btn-lg" type="submit">Subscribe</button>
            </div>
        </div>
    </div>
</div>

<div class="web-app">
    <div class="container">
        <div class="row">
            <div class="col-xs-5 col-xs-offset-1">
                <h1 class="text-center" id="web-app-title">Stay in style</h1>
                <h3 class="process-comments">All your favorite high street brands are just a tap away with delivery fees as low as £3.95</h3>
                <h4 class="text-center">Coming soon to:
                            <i class="fa fa-android" aria-hidden="true"></i>
                            <i class="fa fa-apple" aria-hidden="true"></i>
                </h4>
            </div>
            <div class="col-xs-5 col-xs-offset-1">
                <img class="img-responsive" src="{{asset('images/phone.png')}}"/>

            </div>
        </div>
        <hr class="phone-line">
    </div>
</div>

@include('footer')

@endsection

@section('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="/javascripts/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection
