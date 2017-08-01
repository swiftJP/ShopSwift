@extends('layouts.app')

@section('content')
    <div class="fashion-intro">
        <div class="order-message">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>{{$store}}</h1>
                        <br>
                        <h4>Brent Cross, NW4 3FP | Deliveries until 19:45 |</h4>
                        <h5>*Please note, items are subject to store availability</h5>
                    </div>

                    <div class="col-lg-4">
                        <br>
                        <h4>Average Delivery time: {{$del_time}} mins</h4>
                        <br><br>
                        <h4>Delivery charge: £3.95</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <div class="container">
            <h1 class="item-header">All items</h1>
            @foreach($products->chunk(4) as $productChunk)
                <div class="row">
                    @foreach($productChunk as $product)
                        <div class="col-xs-3">
                            <div class="thumbnail">
                                <img class="img-responsive" src="{{$product->imagePath}}"/>
                                <div class="caption">
                                    <p>{{$product->title}}</p>
                                </div>
                                <div class="clearfix">
                                    <div class="pull-left price">£{{$product->price}}</div>
                                    <a href="{{route('addToCartZara', ['id' => $product->id])}}" role="button" class="btn btn-primary pull-right"><span class="fa fa-plus"></span></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>
    </div>

    @include('footer')
@endsection