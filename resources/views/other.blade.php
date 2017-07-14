<section class="well-lg popular-stores">
        <div class="order">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div>
                            <h3>Order now</h3>
                            <form action="{{url('send')}}" method="post">
                                <input type='hidden' name='csrfmiddlewaretoken'/>
                                <div class="form-group del-input">
                                    <textarea class="form-control input-lg" cols="40" id="delivery_items" name="delivery_items" placeholder="What would you like? e.g Big Mac Meal with fanta with no ice X 1" rows="7"></textarea>
                                </div>

                                <div class="form-group del-input">
                                    <textarea class="form-control input-lg" cols="40" rows="2" id="delivery_address" name="delivery_address" placeholder="Where should we deliver it to? e.g LE11 3TQ or Harry French Halls etc" type="text"></textarea>
                                </div>

                                <div class="form-group del-input">
                                    <label class="control-label"><h4>When do you want it?</h4></label>
                                    <select class="input-lg">
                                        <option>ASAP</option>
                                        <option>2 HOURS</option>
                                    </select>
                                </div>
                                <button type="submit" id="SS-btn" class="btn btn-primary btn-lg text-center">ShopSwift<span class="glyphicon glyphicon-shopping-cart"></span></button><p>One of our Swift Shoppers will contact after your order has been placed</p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>