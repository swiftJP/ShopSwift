@extends('layouts.app')
@section('content')
    @if(Session::has('cart') && Session::get('cart')->totalQty > 0 )
        <div class="row" style="margin-top:10%;">
            <div class="col-lg-6 col-lg-offset-3">
                <ul class="list-group">
                    @if (Session::get('cart')->totalPrice != 'TBC' )
                        @foreach($products as $product)
                            <li class="list-group-item">
                                <a href="{{route('addToCartJD', ['id'=>$product['item']['id']])}}" role="button" class="badge">
                                    <span class="fa fa-plus"></span>
                                </a>
                                <span class="badge">
                                    {{$product['qty']}}
                                </span>
                                <a href="{{route('reduceByOne', ['id'=>$product['item']['id']])}}" role="button" class="badge">
                                    <span class="fa fa-minus"></span>
                                </a>
                                <a href="{{route('removeItem', ['id'=>$product['item']['id']])}}" role="button" class="badge">
                                    <span class="glyphicon glyphicon-remove"></span>
                                </a>

                                <strong>{{$product['item']['title']}}</strong>
                                <p class="label label-default">£{{$product['price']}}</p>
                            </li>
                        @endforeach
                    @else
                        <li class="list-group-item">
                            <strong>Custom Order:</strong> {{$item}} from {{$store}}
                            <a href="{{route('removeCustom')}}" role="button" class="badge"><span class="fa fa-minus"></span></a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <p>Total: £ {{$totalPrice}}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <a role="button" href="#" class="btn btn-success">Checkout</a>
            </div>
        </div>
    @else
        <div class="row" style="margin-top:10%;">
            <div class="col-lg-6 col-lg-offset-3">
                <ul class="list-group">
                   <li class="list-group-item">Basket empty<hr class="hr"></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <p>Total: £0</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <a class="btn btn-success" role="button" href="{{route('stores')}}">Start Shopping Now</a>
            </div>
        </div>
    @endif
@endsection