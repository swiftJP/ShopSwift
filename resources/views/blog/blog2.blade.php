@extends('blog.blogmaster')

@section('blog')
    <div class="blog-body">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-offset-1 col-xs-10 col-xs-offset-1">
                    <div class="blog-top text-center">
                        <h1 style="font-family: 'Alegreya Sans SC', sans-serif;"><strong>Autumn Fashion Trends</strong></h1>
                        <h3><i>Everything you’ll need to slay this autumn</i></h3>
                        <h6>by Tyra Edmund <span class="glyphicon glyphicon-time"></span> 1st August 2017</h6>
                    </div>

                    <div class="blog-img">
                        <div class="thumbnail">
                            <img class="img-responsive" src="{{asset('images/fashiontrends.jpg')}}" />
                        </div>
                    </div>

                    <div class="main">
                        <div class="row">
                            <div class="col-xs-12">
                                <h4 class="text-left">
                                    Where has 2017 gone? It feels like just yesterday we were filling our wardrobe with spring trends and already autumn is among us. Ughhh.
                                    <br><br>
                                    We’re close to the end of the year and that means another season with a whole new trend. We thought now would be the perfect time to reveal the new autumn fashion trends of 2017.
                                    <br><br>

                                    <i>Here’s the rundown:<br></i>
                                </h4>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <h3><strong>Code Red</strong></h3>
                                        <h4> Autumn is red. Plain and simple. It’s a bold move, but one that make will you stand out from the crowd. Be bold this autumn from red-to-toe.
                                            <br><br>
                                        </h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="{{asset('images/blog/RihannaRedDress.jpg')}}"/>
                                            <div class="caption">
                                                <h6>Image credits: Vogue Italia, Zimbio</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="{{asset('images/blog/allRedOutfit.jpg')}}"/>
                                        </div>
                                    </div>
                                </div>
                                <h3><strong>Up your accessory game</strong></h3>
                                <h4>Statement accessories can really give your look that je ne sais quoi. In particular, we love the current trend of larger earrings and tassel earrings, a trend we think is here to stay.
                                    <br><br>
                                </h4>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <h3><strong>Feels just like velvet</strong></h3>
                                        <h4>Another one of our favourite looks is making a reappearance - velvet. Expect to see more vividly colored velvet, as top designers like Prada and Erdem sent out tailored velvet suits. If you’re feeling extra daring, try a pair of velvet boots.
                                            <br><br>
                                        </h4>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="{{asset('images/blog/velvetMDV.jpg')}}"/>
                                            <div class="caption">
                                                <h6>Image credits: Maniere De Voir, Shoes.Remkvartir</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="{{asset('images/blog/velvetBoots.jpg')}}" />
                                        </div>
                                    </div>
                                </div>
                                <h3><strong>Subtle Fur</strong></h3>
                                <h4>We’ve seen fur featured in other seasons but Autumn 2017 is more than ever all about fur, with more focus on subtle, classic fur jackets.
                                    <br><br>
                                </h4>

                                <div class="row">
                                    <div class="col-lg-12">

                                        <h3><strong>Heavy Metal</strong><br></h3>
                                        <h4>Strong metallic shades were embraced Chanel and Ralph Lauren in their recent fashion shows. Celebs are taking the concept even further by infusing metallic pieces with subtle colors, giving a remarkable look. Autumn 2017 is on course to be a shiny one!
                                        </h4>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="{{asset('images/blog/metallicKendall.jpg')}}" />
                                            <div class="caption">
                                                <h6>Image credits: Rebellion Fashion, Rare Ldn</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="{{asset('images/blog/metallicTrousers.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="{{asset('images/blog/metallicDress.jpg')}}" />
                                        </div>
                                    </div>
                                </div>
                                <h4 class="text-center"><span style="color:red; font-weight:bold;">Subscribe <a href="{{route('home')}}">here</a> to get more ShopSwift news and blog posts or reach out to us at info@shopswift.co.uk</span><br><br></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection