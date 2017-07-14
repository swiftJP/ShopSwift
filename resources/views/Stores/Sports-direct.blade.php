@extends('layouts.app')

@section('content')
    <div class="other-intro">
        <div class="order-message">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Footlocker</h1>
                        <br>
                        <h4>Brent Cross, NW4 3FP | Deliveries until 19:45 |</h4>
                    </div>

                    <div class="col-lg-4">
                        <br>
                        <h4>Average Delivery time: 32 mins</h4>
                        <br><br>
                        <h4>Delivery charge: £4.95</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('other')
    @include('footer')
@endsection