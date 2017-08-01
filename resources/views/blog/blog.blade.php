@extends('blog.blogmaster')

@section('blog')
    <div class="blog-posts">
        <div class="row">
            <div class="col-lg-4 col-xs-6">
                <div class="thumbnail clearfix">
                    <a href="{{route('blog2')}}">
                        <img src="https://images.pexels.com/photos/179909/pexels-photo-179909.jpeg?w=1260&h=750&auto=compress&cs=tinysrgb" class="img-responsive"/>
                    </a>
                    <div class="caption text-center">
                        <h3><strong>Autumn Fashion Trends: What to wear in autumn 2017?</strong></h3>
                        <hr class="blog-hr">
                        <h6>Where has 2017 gone? It feels like just yesterday we were filling our wardrobe with spring trends and already autumn is among us. Ughhh.We’re close to ...
                        </h6>
                        <h5><a href="{{route('blog2')}}">Continue Reading <span class="glyphicon glyphicon-arrow-right"></span></a></h5>
                        <h3 class="blog-author">Tyra Ukuti-Edmund</h3>
                        <h5 class="blog-date"><i>Aug 1</i></h5>
                        <h5 class="pull-right">(2 min<span class="glyphicon glyphicon-time"></span>)</h5>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-xs-6">
                <div class="thumbnail clearfix">
                    <img src="https://images.pexels.com/photos/34577/pexels-photo.jpg?w=1260&h=750&auto=compress&cs=tinysrgb" class="img-responsive"/>
                    <div class="caption text-center">
                        <h3><strong>How startups like ShopSwift are changing the way we behave</strong></h3>
                        <hr class="blog-hr">
                        <h6>Nowadays, pretty much everyone has interacted with an on demand service without even realizing it. The on-demand economy encompasses a variety ...</h6>
                        <h5><a href="#">Continue Reading <span class="glyphicon glyphicon-arrow-right"></span></a></h5>
                        <h3 class="blog-author">Jordan Peregrino</h3>
                        <h5 class="blog-date"><i>Jul 27</i></h5>
                        <h5 class="pull-right">(4 min<span class="glyphicon glyphicon-time"></span>)</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection