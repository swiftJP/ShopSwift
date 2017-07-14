
@extends('layouts.app')

@section('content')
<div class="intro-header">
    <div class="jumbotron intro-message">
        <h1>The quicker, faster way to shop</h1>
        <h2>We'll shop and pick up anything you favourite high street stores and have it delivered to <strong>you</strong> in minutes</h2>
        <br>
        <div class="row">
            <div class="col-lg-12">
                <a href="{{url('stores')}}"><button class="btn btn-danger btn-lg" id="intro-btn">Order now</button></a>
            </div>
        </div>
    </div>
</div>
<div class="process">
    <div class="container">
        <h1 id="process" style="font-size:47px;">How it works</h1>
        <div class="row process-steps">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="glyphicon glyphicon-shopping-cart"></i>
                <p>Browse online from a variety of local shops </p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"><i class="glyphicon glyphicon-time"></i>
                <p>Submit your order and your own personal Swift Shopper will contact you shortly</p>
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
            <button class="btn btn-primary btn-lg" type="submit">Subscribe</button>
        </div>
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
