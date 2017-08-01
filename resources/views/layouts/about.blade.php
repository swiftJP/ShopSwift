@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row" id="about-img">

            <div class="row" id="about-img-message">
                <div class="col-xs-8">
                    <h4>About ShopSwift</h4>
                    <h1>Making shopping...simpler</h1>
                </div>

                <div class="col-xs-4">
                    <div><img class="img-responsive" src="{{asset('images/ShopSwiftLogo.png')}}"/></div>
                </div>

            </div>
        </div>
    </div>

    <div class="about-message">
        <div class="container">
            <div class="row">
                <br>
                <div class="col-xs-12">
                    <h1 class="text-center" style="font-family: 'Arvo';"><strong><i>Swift</i> Mission</strong></h1>

                    <h2 class="text-center">Helping <strong>you</strong>, make the most of your time</h2>
                    <div class="col-lg-offset-1 col-lg-10">
                        <h4 class="text-justify">
                            I'm sure we don't have to remind you just how time-consuming and frustrating shopping can be.
                            Ever found yourself travelling all the way to a shop to find out the item you want is not in stock? The worst...
                            <br><br>

                            We started ShopSwift because we believe that there is a better way to shop, that will save you time and stress <br>
                            At ShopSwift we have one mission; to make all your favourite items from your favourite stores in your area accessible on-demand, saving you time, energy and money.
                            We passionately believe that your time is the most precious asset and so <strong>we're here to help you!</strong></h4>
                    </div>
                </div>
            </div>
            <br><br><br>

            <div class="row">

                <div class="col-lg-12">
                    <h1 class="text-center" style="font-family: 'Arvo';"><strong>Our <i>Swift</i> shops</strong></h1>

                    <h2 class="text-center">Bringing <strong>you</strong> more for less...</h2>
                    <div class="col-lg-offset-1 col-lg-10">
                        <h4 class="text-justify">
                            We partner with more stores to give you the best selection of stores at your fingertips.
                            New Partners and items are being added all the time, so keep checking our web-app. We won't disappoint!

                            <br><br>Our SwiftShoppers (your own personal shopper) are the backbone of our business, ensuring you get the quality goods you want, fast. We have a large army of SwiftShoppers eagerly awaiting to serve you on-demand.

                            <br><br> If you would like more information about ShopSwift or to become a Swift Shop, feel free to contact us at info@shopswift.co.uk.<br><br><br><br><br><br>

                        </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('footer')

@endsection
