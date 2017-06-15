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
                            <form action="{{route('payment')}}" method="POST">
                                {!!csrf_field()!!}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <script
                                        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                        data-key="pk_test_nMG6joBPzK6kGAAjgzSuakUR"
                                        data-amount="450"
                                        data-name="ShopSwift"
                                        data-description="2 widgets"
                                        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
                                        data-locale="auto"
                                        data-zip-code="false"
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
    <script src="https://js.stripe.com/v3/"></script>
    <script type="text/javascript">Stripe.setPublishableKey('pk_test_nMG6joBPzK6kGAAjgzSuakUR')</script>
@endsection
