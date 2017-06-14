<h1>YOU GOT A DELIVERY;)<br></h1>

<p>Who?: {{ Auth::user()->name }}</p>
<p>What?: {{$delivery_items}}</p>
<p>Where?: {{$delivery_address}}</p>
<p>When?: {{$delivery_time}}</p>
<p>How to contact: {{Auth::user()->phone}}</p>



