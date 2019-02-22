@section('related')
    <!--============================================
            START MORE PRODUCT ARE
        ==============================================-->
    <section class="latest-product section--padding oldxz">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>С этим продуктом будет эффективно</h2>
                    </div>
                </div>
                <div class="col-md-12 bgdor">
                    <div class="product-slide-area owl-carousel">
                        @foreach ($service->relatedServicesTo as $relatedService)
                            @include('web.partials.product_card_carousel', [
                                'product' => $relatedService,
                                'singleRoute' => route('services.show', $relatedService->slug),
                            ])
                        @endforeach
                        {{--<div class="product-single latest-single">--}}
                            {{--<div class="product-thumb">--}}
                                {{--<figure>--}}
                                    {{--<img src="/public/images/product1.png" alt="" class="img-fluid">--}}
                                    {{--<figcaption>--}}
                                        {{--<ul class="list-unstyled">--}}
                                            {{--<li>--}}
                                                {{--<a href="">Подключитьб</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</figcaption>--}}
                                {{--</figure>--}}
                            {{--</div>--}}
                            {{--<!-- Ends: .product-thumb -->--}}
                            {{--<div class="product-excerpt">--}}
                                {{--<h5>--}}
                                    {{--<a href="">E-commerce Shopping Cart</a>--}}
                                {{--</h5>--}}
                                {{--<ul class="titlebtm">--}}
                                    {{--<li>--}}
                                        {{--<img class="auth-img" src="/public/images/auth-img2.png" alt="author image">--}}
                                        {{--<p>--}}
                                            {{--<a href="#">Theme-Valley</a>--}}
                                        {{--</p>--}}
                                    {{--</li>--}}
                                    {{--<li class="product_cat">--}}
                                        {{--in--}}
                                        {{--<a href="#">WordPress</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                                {{--<div class="texz">--}}
                                    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam sunt corrupti quibusdam officia, dignissimos magnam. Animi quos reprehenderit vero cupiditate temporibus voluptatem ut asperiores dolore voluptate molestias? Totam modi eligendi quis aliquam animi fugit atque voluptatem deserunt facere repudiandae voluptatibus impedit, dolor autem consectetur, voluptate optio. Voluptas quas voluptatibus velit quidem fuga. Voluptate veniam molestias excepturi alias harum, eum vero eveniet! Nam vero maiores reprehenderit placeat molestias numquam eius, rerum dolore ex dolor quo repellat dolores aliquid fugit amet, officia, nulla nobis laborum? Enim modi optio voluptate veritatis earum voluptatum ut pariatur inventore repellat, fugiat exercitationem, quisquam quis asperiores vel? Velit itaque ipsum fugiat? Iure velit dolore eos nesciunt maiores delectus earum, quisquam dicta alias exercitationem quam corporis fugiat voluptas, ducimus placeat quos nam vero, saepe deserunt dolor aperiam ab illum. Qui quo ipsam rerum! Nihil eum reprehenderit illo natus, officiis, inventore, dolores voluptate eaque neque dolorum culpa! Incidunt sint, illum ex, ut, mollitia sit consequatur perspiciatis laboriosam voluptatum consectetur facilis ipsum autem eligendi fuga animi debitis? Delectus dolorem dicta perferendis iste sint deserunt. Illo odit tempora explicabo rem alias nobis, deleniti quidem eos eligendi. Quibusdam accusamus explicabo voluptatum libero, ad mollitia aperiam laudantium eveniet vero velit ea consectetur.</p>--}}
                                {{--</div>--}}
                                {{--<ul class="product-facts clearfix">--}}
                                    {{--<li class="price">$20</li>--}}
                                    {{--<li class="sells">--}}
                                        {{--<span class="icon-basket"></span>81--}}
                                    {{--</li>--}}
                                    {{--<li class="product-fav">--}}
                                        {{--<span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>--}}
                                    {{--</li>--}}
                                    {{--<li class="product-rating">--}}
                                        {{--<ul class="list-unstyled">--}}
                                            {{--<li class="stars">--}}
                                                {{--<span><i class="fa fa-star"></i></span>--}}
                                                {{--<span><i class="fa fa-star"></i></span>--}}
                                                {{--<span><i class="fa fa-star"></i></span>--}}
                                                {{--<span><i class="fa fa-star"></i></span>--}}
                                                {{--<span><i class="fa fa-star"></i></span>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                            {{--<!-- Ends: .product-excerpt -->--}}
                        {{--</div>--}}
                    </div>
                </div>
                <!-- Ends: .col-md-12/Section Title -->
                <!-- Ends: .product-list -->
            </div>
        </div>
    </section>

    <!--============================================
        END MORE PRODUCT AREA
    ==============================================-->
@endsection