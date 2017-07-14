@extends('layouts.app')

@section('content')
    <div class="stores-img">
        <div class="stores-intro">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="text-center">Your favourite Brent Stores</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="stores-background">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="stores-tab">
                        <ul class="nav nav-tabs">
                            <li data-tab="tab-1" class="current"><a>Supermarkets</a></li>
                            <li data-tab="tab-2"><a>Health & Beauty</a></li>
                            <li data-tab="tab-3"><a>Fashion</a></li>
                            <li data-tab="tab-4"><a>Footwear</a></li>
                            <li data-tab="tab-5"><a>Custom Order</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div id="tab-1" class="tab-content current">
                <div class="row">
                    <h2 class="text-center">Shop from your local supermarket</h2><br>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('aldi')}}"><img class="img-responsive" src="{{asset('images/aldi.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">Aldi</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('tesc')}}"><img class="img-responsive" src="{{asset('images/tesco.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">Tesco</h3></div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="tab-2" class="tab-content">
                <div class="row">
                    <h2 class="text-center">Feel great</h2><br>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">

                        <a href="{{route('mcdo')}}"><img class="img-responsive" src="{{asset('images/boots.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">Boots</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('body')}}"><img class="img-responsive" src="{{asset('images/body-shop.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">The Body Shop</h3></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-3" class="tab-content">
                <div class="row">
                    <h2 class="text-center">Stay in style</h2><br>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('prim')}}"><img class="img-responsive" src="{{asset('images/primark.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">Primark</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="#"><img class="img-responsive" src="{{asset('images/topshop.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">TopShop</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('zara')}}"><img class="img-responsive" src="{{asset('images/zara.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">Zara</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('jd')}}"><img class="img-responsive" src="{{asset('images/missselfridge.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">Miss Selfridge</h3></div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('rive')}}"><img class="img-responsive" src="{{asset('images/River-Island.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">River Island</h3></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-4" class="tab-content">
                <div class="row">
                    <h2 class="text-center">Killer kicks</h2><br>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('jd')}}"><img class="img-responsive" src="{{asset('images/jd.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">JD</h3></div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                        <a href="{{route('SD')}}"><img class="img-responsive" src="{{asset('images/foot-locker.jpg')}}"></a>
                        <div class="thumbnail">
                            <div class="caption">
                                <h3 class="text-center">FootLocker</h3></div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="tab-5" class="tab-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <h2 class="text-center">Custom Order</h2>
                            <h5>Can't find the store you want?
                            Create a custom order and one of our Swift Shoppers will contact you soon!</h5>
                            <form action="{{route('custom')}}" method="post">
                            {{ csrf_field() }}
                                <!--Csrf Token-->
                                <div class="form-group del-input">
                                    <input class="form-control input-lg" id="delivery_store" name="delivery_store" placeholder="Which store? e.g Lush" />
                                </div>

                                <div class="form-group del-input">
                                    <textarea class="form-control input-lg" cols="40" rows="7" id="delivery_items" name="delivery_items" placeholder="What would you like? e.g Size 9 Triple Black Nike Huarache " ></textarea>
                                </div>

                                <div class="form-group del-input">
                                    <textarea class="form-control input-lg" cols="40" rows="2" id="delivery_address" name="delivery_address" placeholder="Where should we deliver it to? e.g HA1 3PP or 50 Huxley Close"></textarea>
                                </div>

                                <div class="form-group del-input">
                                    <label class="control-label"><h4>When do you want it?</h4></label>
                                    <select name="delivery_time" required="required" class="input-lg">
                                        <option>ASAP</option>
                                        <option>2 HOURS</option>
                                    </select>
                                </div>
                                <button type="submit" id="SS-btn" class="btn btn-primary btn-lg text-center">ShopSwift<span class="glyphicon glyphicon-shopping-cart"></span></button>
                                <p><br>*One of our Swift Shoppers will contact after your order has been placed</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')
@endsection

@section('scripts')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script>
        $(function() {
            $('ul.nav-tabs li').on('click', function(){
                var tab_id = $(this).attr('data-tab');

                $('ul.tabs li.current').removeClass('current');
                $('.tab-content').removeClass('current');

                $(this).addClass('current');
                $("#"+tab_id).addClass('current');

            });
        });
    </script>
@endsection