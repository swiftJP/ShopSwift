@extends('layouts.app')

@section('content')
    <div class="other-intro">
        <div class="order-message">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>99p Stores Loughborough</h1>
                        <br>
                        <h4>8 Market Place, Loughborough LE11 3EB | Deliveries until 17:00 |</h4>
                    </div>

                    <div class="col-lg-4">
                        <br>
                        <h4>Average Delivery time: 35 mins</h4>
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