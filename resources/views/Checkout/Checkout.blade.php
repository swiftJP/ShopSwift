@extends('layouts.app')


@section('content')
    <div class="container checkout">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Order Summary</div>
                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-1">
                                    <h3><strong>You ordered:</strong></h3>
                                    <h3>{{Session::get('delivery_items')}} from {{Session::get('delivery_store')}}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-1">
                                    <h3><strong>Delivered to:</strong></h3>
                                    <h3>{{Session::get('delivery_address')}}</h3>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-1">
                                    <h3><strong>Requested Delivery Time:</strong></h3>
                                    <h3>{{Session::get('delivery_time')}}</h3>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-1">
                                    <h3><strong>Delivery Fee:</strong></h3>
                                    <h3 id="charge">£3.95 plus 10% of order</h3>
                                </div>
                            </div>

                            <br>

                            <div class="row payments">
                                <div class = "row">
                                    <div class="col-xs-10 col-lg-7 col-md-7  col-md-offset-1 col-lg-offset-1">
                                        <h5><strong>Have you got a promo code?</strong></h5>
                                        <div class="input-group">
                                            <div class="input-group-addon"><span class="glyphicon glyphicon-check"></span></div>
                                            <input type="text" class="form-control" id="promo" size="50" placeholder="ADD PROMO CODE FOR FREE DELIVERY">
                                            <div class="input-group-btn">
                                                <button class="btn btn-danger" type="button" id="promo-btn">Apply</button>
                                            </div>
                                        </div>

                                        <div class="row" class="del-fee">
                                            <div class="col-xs-8">
                                                <form action="{{route('payment')}}" method="post">
                                                    {!!csrf_field()!!}
                                                    <br><br>
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                    <script
                                                            src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                                            data-key="pk_live_9PjCBPoSvcOcMUdRMVsyg9cl"
                                                            data-amount="Delivery fee 450"
                                                            data-name="ShopSwift"
                                                            data-description=""
                                                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                                            data-locale="auto"
                                                            data-currency="gbp">
                                                    </script>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript" src="{{ asset('js/checkout.js') }}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@endsection
