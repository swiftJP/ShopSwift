@extends('layouts.app')

<!---Main Content--->
@section('content')
    <div class="intro-header">

        <div class="row">
            <div class="col-md-12">
                <div class="intro-message">
                    <h1>The faster, quicker way to shop</h1>
                    <h3>Shop online and have good delivered to <strong>you</strong> in minutes</h3>
                </div>
                <div class="container">
                    <form class="container" method="get" action="{{route('getcheckout')}}">
                        {{csrf_field()}}
                        <div class="form-group col-lg-10">
                            <input type="text" size='4' class="form-control" placeholder="What would you like? e.g. Large Big Mac Meal" name="delivery_items">
                        </div>
                        <div class="form-group col-lg-10">
                            <input type="text" size='4' class="form-control" placeholder="Where should we deliver? e.g. LE11 3BS or William Morris Halls" name="delivery_address">
                        </div>
                        <div class="form-group col-lg-10">
                            <select class="form-control" name="delivery_time">
                                <option>ASAP</option>
                                <option>2 hours</option>
                            </select>
                        </div>
                        <button class="btn btn-primary" type="submit">ShopSwift <span class="glyphicon glyphicon-shopping-cart"></span></button>
                    </form>
                </div>


            </div>
        </div>
    </div>

    <div class="process">
        <div class="container">
            <div class="row">
                <div class="col-xs-4">
                    <h2><span class="glyphicon glyphicon-shopping-cart"></span></h2>
                    <h5>Shop online from a variety of local shops</h5>
                </div>

                <div class="col-xs-4">
                    <h2><span class="glyphicon glyphicon-time"></span></h2>
                    <h5>Order and have your goods delivered in as less than an hour! <br> (You could also arrange to have them delivered later)</h5>
                </div>

                <div class="col-xs-4">
                    <h2><span class="glyphicon glyphicon-home"></span></h2>
                    <h5>Sit back and wait whilst your goods are delivered to you!</h5>
                </div>
            </div>
        </div>
    </div>
    <section class="most-popular">
        <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Your favourites, delivered by us</h1>
            </div>

            <div class="col-lg-4 col-md-4 col-xs-6">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="https://jdsports-careers.basis-system.com/Content/images/brands/jd-sports/home-background.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://www.mcdonalds.co.uk/ukhome/People/Franchising.html/assets/images/Slider-Images_0008_1a.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://i3.mirror.co.uk/incoming/article8134224.ece/ALTERNATES/s615b/PAY-General-views-of-the-Primark-store.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="https://www.yell.com/static/image/1b0e3103-7db6-4429-82c2-3915ce16985f_image_jpeg" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://www.lancashiretelegraph.co.uk/resources/images/4001563/" alt="">
                </a>
            </div>
            <div class="col-lg-4 col-md-4 col-xs-6 thumb">
                <a class="thumbnail" href="#">
                    <img class="img-responsive" src="http://www.s4rb.com/wp-content/uploads/2017/01/tesco1.jpg" alt="">
                </a>
            </div>
        </div>
        </div>
    </section>

    <section class="careers">
        <div class="container">
            <div class="div">
                <div class="row">
                    <h2>Work With Us</h2>
                    <div class="col-lg-12" id="ShopWithUs">
                        <div>
                            <h3>SHOP WITH US</h3>
                            <p>Looking for more flexibility? Become a Swift shopper for great fees and hours you can choose. We offer tons of rider perks too, like shop discounts.</p>
                        <button class="btn btn-danger">Shop with us</button>

                        </div>
                    </div>
                    <div class="col-lg-12" id="BecomeSwift">
                        <h3>BE A SWIFT SHOP</h3>
                        <p>We’re always looking to help shop become more Swift! Team up with us and reach more customers than ever.</p>
                        <br>
                        <button class="btn btn-danger">Become a Swift shop</button>
                        <br>
                    </div>
                    <div class="col-lg-12" id="JoinSwift">
                        <h3>JOIN THE SWIFT TEAM</h3>
                        <p>Interested in being part of a lively start-up? ShopSwift maybe for you. Check out what's available at in the team.</p>

                        <button class="btn btn-danger">Be a Swift member</button>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection