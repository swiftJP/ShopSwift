@extends('layouts.app')

@section('content')
    <div class="confirmation">
    <div class="container">
        <div class="confirmation-message">
            <h2>Order Received</h2>
            <h3>Thank you for your order. Your order has been received and one of our Swift Shopper will contact you very soon!</h3>
        </div>
    </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="/javascripts/jquery-3.1.1.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
@endsection