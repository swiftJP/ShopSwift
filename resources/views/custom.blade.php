@extends('layouts.app')

@section('content')
    <div class="fashion-intro">
        <div class="order-message">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>Create Customer Order</h1>
                        <br>
                        <h4>Deliveries until 20:00 | Delivery charge: £5.95</h4>
                    </div>

                    <div class="col-lg-5">
                        <br>
                        <h3>Create a custom order and one of our Swift Shoppers will contact you soon.</h3>
                        <br><br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="well-lg popular-stores">
        <div class="order">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div>
                            <h3>Order now</h3>
                            <form action="{{url('send')}}" method="post">
                                {{ csrf_field() }}
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <input class="form-control input-lg" id="del_store" name="del_store" placeholder="Which store? e.g Banana Republic"/>
                                </div>

                                <div class="form-group del-input">
                                    <textarea class="form-control input-lg" cols="40" id="del_item" name="del_item" placeholder="What would you like? e.g White Puma Sliders size 12" rows="2"></textarea>
                                </div>

                                <div class="form-group del-input">
                                    <label class="control-label"><h4>When do you want it?</h4></label>
                                    <select class="input-lg">
                                        <option>ASAP</option>
                                        <option>2 HOURS</option>
                                    </select>
                                </div>
                                <button type="submit" id="SS-btn" class="btn btn-primary btn-lg text-center">ShopSwift<span class="glyphicon glyphicon-shopping-cart"></span></button><p><br>*One of our Swift Shoppers will contact after your order has been placed</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
@endsection