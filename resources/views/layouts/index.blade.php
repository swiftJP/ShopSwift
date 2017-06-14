
@extends('layouts.app')

@section('content')
<div class="intro-header">
    <div class="jumbotron intro-message">
        <h2>The quicker, faster way to shop</h2>
        <p>Order online and have your good delivered in minutes</p>
        <p></p>
        <form method="post" action="{{route('order')}}" class="require-validation"  data-stripe-publishable-key="pk_bQQaTxnaZlzv4FnnuZ28LFHccVSaj">
            {!!csrf_field()!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="row order_inputs">
                <div class="col-lg-8 col-lg-offset-2 col-xs-12">
                    <input class="form-control input-sm" type="text" name="delivery_items" required="" placeholder="What would you like? e.g. Large Big Mac Meal">
                </div>
                <div class="col-lg-6 col-lg-offset-2">
                    <input class="form-control input-sm" type="text" name="delivery_address" required="" placeholder="Where should we deliver it to? eg William Morris Halls or LE11 3BS">
                </div>
                <div class="col-lg-2">
                    <select class="form-control" name="delivery_time">
                        <option>ASAP</option>
                        <option>2 hours</option>
                    </select>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-primary btn-lg" id="customButton" type="submit">ShopSwift <i class="glyphicon glyphicon-shopping-cart"></i></button>
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
                <a href="#"><img class="img-responsive" src="http://crowngate-worcester.co.uk/wp-content/uploads/2014/06/CL9-Worcester-Photo-1394-Entrance.jpg"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Primark</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="http://www.eastlothiancourier.com/resources/images/4821644/"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Aldi</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="http://www.thatsfarming.com/uploads/news/1200x800_8-208a347d63693d952b7c8a3b7338ac58/4448-Tesco-mielec.jpg"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Tesco</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="https://www.thesun.co.uk/wp-content/uploads/2017/02/nintchdbpict000304234951.jpg?strip=all&amp;w=1200&amp;h=800&amp;crop=1"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">McDonalds</h3></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="http://m.arabianbusiness.com/incoming/article441178.ece/BINARY/26141101_H967198.JPG"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">KFC</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="https://www.thesun.co.uk/wp-content/uploads/2017/02/nintchdbpict000254666394-e1486177117251.jpg?strip=all&amp;w=1200&amp;h=800&amp;crop=1"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Iceland</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="https://concreteplayground.com/content/uploads/2015/03/Topshop2.jpg"></a>
                <div class="thumbnail">
                    <div class="caption">
                        <h3 class="text-center">Topshop</h3></div>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                <a href="#"><img class="img-responsive" src="https://www.thesun.co.uk/wp-content/uploads/2017/03/nintchdbpict000311890662.jpg?strip=all&amp;quality=100&amp;w=1200&amp;h=800&amp;crop=1"></a>
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
            <h3><a href="#"><img class="img-responsive" src="http://shopswift.co.uk/ShopSwiftLogo.png" alt="ShopSwift"></a></h3>
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
                <p> <a href="#" target="_blank">support@shopswift.co.uk</a></p>
            </div>
        </div>
        <div class="clearfix visible-sm-block"></div>
        <div class="col-md-4 footer-about">
            <h4>About the company</h4>
            <p>At ShopSwift we have one mission; supplying you with all your favourite goods from your favourite shops in minutes.</p>
            <div class="social-links social-icons"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
        </div>
    </div>
</footer>
@endsection

@section('scripts')
    <script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
    <script src="https://checkout.stripe.com/checkout.js"></script>
    <script type="text/javascript">Stripe.setPublishableKey('pk_test_nMG6joBPzK6kGAAjgzSuakUR')</script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
    <script type="text/javascript" src="{{ URL::to('js/checkout.js')}}"></script>
@endsection


