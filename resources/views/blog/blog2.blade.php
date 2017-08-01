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
                                    <div class="col-xs-4">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="http://cinefog.com/wp-content/uploads/2016/08/Skirts-Fall-Winter-2016-2017-Fashion-Trends-11.jpg"/>
                                            <div class="caption">
                                                <h6>Image credits: Vogue Italia, Zimbio</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="http://www1.pictures.zimbio.com/gi/Rihanna+Valerian+City+Thousand+Planets+European+fsdiwShv2Mbl.jpg"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="data:image/jpeg;base64,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"/>
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
                                    <div class="col-lg-6">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="https://cdn.shopify.com/s/files/1/0282/6678/products/MDV_Ecom_Womens_April24332.jpg?v=1501119419"/>
                                            <div class="caption">
                                                <h6>Image credits: Maniere De Voir, Shoes.Remkvartir</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSMS8VcfrUVp-Uw7WeBYJBL6dE3aYEskhsR2CFRLVcu-MBTeSgG"/>
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
                                    <div class="col-xs-4">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="https://gl-images.condecdn.net/image/RkMnBBXgyrq/crop/1020"/>
                                            <div class="caption">
                                                <h6>Image credits: Rebellion Fashion, Rare Ldn</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7zo4z0nZHtMbF5hPdGpnERMfTHhHKxit5sMhua5yFEODrPn0g"/>
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="http://www.rarelondon.com/media/catalog/product/cache/1/image/9df78eab33525d08d6e5fb8d27136e95/l/i/lia5n541_gold_1.jpg"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <p>Contact us at info@shopswift.co.uk</p>
                </div>
            </div>
        </div>

    </div>

@endsection