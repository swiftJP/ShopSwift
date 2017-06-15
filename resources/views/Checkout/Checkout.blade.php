@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Order Summary</div>
                    <div class="panel-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-8 col-xs-offset-1">
                                    <h3><strong>You ordered:</strong></h3>
                                    <h3>{{Session::get('delivery_items')}}</h3>
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
                            <form action="{{route('payment')}}" method="post">
                                {!!csrf_field()!!}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_nMG6joBPzK6kGAAjgzSuakUR"
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
@endsection

@section('scripts')
    <script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
@endsection
