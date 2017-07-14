@extends('layouts.app')

@section('content')
    <div class="grocery-intro">
        <div class="order-message">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h1>ALDI</h1>
                        <br>
                        <h4>127-133 Field End Road, HA5 1QH | Deliveries until 21:30 |</h4>
                    </div>

                    <div class="col-lg-4">
                        <br>
                        <h4>Average Delivery time: 39 mins</h4>
                        <br><br>
                        <h4>Delivery charge: £3.95</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="well-lg popular-stores">
        <div class="order">
            <div class="container">
                <div class="row">
                    <div class="col-xs-7 col-sm-9">
                        <div>
                            <h3>Order now</h3>
                            <form action="{{url('send')}}" method="post">
                                <input type='hidden' name='csrfmiddlewaretoken'/>
                                <div class="form-group del-input">
                                    <textarea class="form-control input-lg" cols="40" id="delivery_items" name="delivery_items" placeholder="What would you like?" rows="7"></textarea>
                                </div>

                                <div class="form-group del-input">
                                    <textarea class="form-control input-lg" cols="40" rows="2" id="delivery_address" name="delivery_address" placeholder="Where should we deliver it to?" type="text"></textarea>
                                </div>

                                <div class="form-group del-input">
                                    <label class="control-label"><h4>When do you want it?</h4></label>
                                    <select class="input-lg">
                                        <option>ASAP</option>
                                        <option>2 HOURS</option>
                                    </select>
                                </div>
                                <input type='hidden' name='delivery_store' value="Aldi"/>
                                <button type="submit" id="SS-btn" class="btn btn-primary btn-lg text-center">ShopSwift<span class="glyphicon glyphicon-shopping-cart"></span></button><p><br>*One of our Swift Shoppers will contact after your order has been placed</p>
                            </form>
                        </div>
                    </div>

                    <div class="col-xs-5 col-sm-3">
                        <h3>What's Hot?</h3>
                        <div class="whats-hot">
                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <div><img class="img-responsive" src="{{asset('images/Salmon-Fillets.jpg')}}"/>
                                        </div>
                                        <div class="caption">
                                            <h4 class="text-center">Salmon Fillets</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('footer')
@endsection