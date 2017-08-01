@extends('layouts.app')

@section('content')
    <div class="stores-background">
        <div class="container">
            <div class="stores-content">
                <div class="row text-center">
                    <h1>Stores</h1>
                    <hr>
                    <h4 class="text-left stores-title">Most Popular</h4>
                    <div class="col-xs-3">
                        <div class="thumbnail">
                            <a href="{{route('jd')}}"><img class="img-responsive" src="{{asset('images/jd.jpg')}}"/></a>
                            <div class="caption">
                                <h4>JD Sports</h4>
                                <p style="color:#6c6c6c; font-weight: lighter;">Undisputed king of trainers. <br>Delivery £3.95</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="thumbnail">
                            <a href="{{route('zara')}}"><img class="img-responsive" src="{{asset('images/zara.jpg')}}"/></a>
                            <div class="caption">
                                <h4>Zara</h4>
                                <p style="color:#6c6c6c; font-weight: lighter;">Trendy runway fashion.<br>Delivery: £3.95</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('images/HandM.jpg')}}"/>
                            <div class="caption">
                                <h4>H&M</h4>
                                <p style="color:#6c6c6c; font-weight: lighter;">Affordable quality and style.<br>Delivery: £3.95</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-3">
                        <div class="thumbnail">
                            <a href="{{route('custom')}}"><img class="img-responsive" src="{{asset('images/custom.jpg')}}"/></a>
                            <div class="caption">
                                <h4>Custom</h4>
                                <p style="color:#6c6c6c; font-weight: lighter;">Your favourite stores on-demand<br>Delivery: £4.95</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <h4 class="text-left stores-title">More Stores</h4>
                    <div class="col-xs-2">
                        <div class="thumbnail">
                            <a href="{{route('RI')}}"><img class="img-responsive" src="{{asset('images/River-Island.JPG')}}"/></a>
                            <h4 class="caption">River Island<i class="badge">£3.95</i></h4>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="thumbnail">
                            <a href="{{route('MS')}}"><img class="img-responsive" src="{{asset('images/missselfridge.jpg')}}"/></a>
                            <h4 class="caption">Miss Selfridge<i class="badge">£3.95</i></h4>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="thumbnail">
                            <a href="{{route('FL')}}"><img class="img-responsive" src="{{asset('images/foot-locker.jpg')}}"/></a>
                            <h4 class="caption">Footlocker<br><i class="badge">£5.95</i></h4>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="thumbnail">
                            <a href="{{route('boots')}}"><img class="img-responsive" src="{{asset('images/boots.jpg')}}"/></a>
                            <h4 class="caption">Boots<br><i class="badge">£3.95</i></h4>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="thumbnail">
                            <a href="{{route('body')}}"><img class="img-responsive" src="{{asset('images/body-shop.jpg')}}"/></a>
                            <h4 class="caption">Body Shop<br><i class="badge">£4.95</i></h4>
                        </div>
                    </div>
                    <div class="col-xs-2">
                        <div class="thumbnail">
                            <a href="{{route('apple')}}"><img class="img-responsive" src="{{asset('images/apple-store.jpg')}}"/></a>
                            <h4 class="caption">Apple Store<i class="badge">£5.95</i></h4>
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
            $('#create').click(function(){
                $('custom-tab').toggle();
            });
        });
    </script>
@endsection