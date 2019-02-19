<!-- Start .col-md-4 -->
<div class="col-lg-4 col-md-6">
    <div class="product-single latest-single">
        <div class="product-thumb">
            <figure>
                <img src="{{ $product->logo->url ?? '' }}" alt="{{ $product->logo->alt ?? '' }}" class="img-fluid">
                <figcaption>
                <ul class="list-unstyled">
                    <li>
                        <a href="">Подключитьб</a>
                    </li>
                </ul>
            </figcaption>
            </figure>
        </div>
        <!-- Ends: .product-thumb -->
        <div class="product-excerpt">
            <h5>
                <a href="{{ $singleRoute }}">{{ $product->name }}</a>
            </h5>
            <ul class="titlebtm">
                @if ( $product->category )
                    <li class="product_cat">
                        in
                        <a href="{{ route( 'categories.show', $product->category->slug ) }}">{{ $product->category->name }}</a>
                    </li>
                @endif
            </ul>
            <div class="texz">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam sunt corrupti quibusdam officia, dignissimos magnam. Animi quos reprehenderit vero cupiditate temporibus voluptatem ut asperiores dolore voluptate molestias? Totam modi eligendi quis aliquam animi fugit atque voluptatem deserunt facere repudiandae voluptatibus impedit, dolor autem consectetur, voluptate optio. Voluptas quas voluptatibus velit quidem fuga. Voluptate veniam molestias excepturi alias harum, eum vero eveniet! Nam vero maiores reprehenderit placeat molestias numquam eius, rerum dolore ex dolor quo repellat dolores aliquid fugit amet, officia, nulla nobis laborum? Enim modi optio voluptate veritatis earum voluptatum ut pariatur inventore repellat, fugiat exercitationem, quisquam quis asperiores vel? Velit itaque ipsum fugiat? Iure velit dolore eos nesciunt maiores delectus earum, quisquam dicta alias exercitationem quam corporis fugiat voluptas, ducimus placeat quos nam vero, saepe deserunt dolor aperiam ab illum. Qui quo ipsam rerum! Nihil eum reprehenderit illo natus, officiis, inventore, dolores voluptate eaque neque dolorum culpa! Incidunt sint, illum ex, ut, mollitia sit consequatur perspiciatis laboriosam voluptatum consectetur facilis ipsum autem eligendi fuga animi debitis? Delectus dolorem dicta perferendis iste sint deserunt. Illo odit tempora explicabo rem alias nobis, deleniti quidem eos eligendi. Quibusdam accusamus explicabo voluptatum libero, ad mollitia aperiam laudantium eveniet vero velit ea consectetur.</p>
            </div>
            <ul class="product-facts clearfix">
                <li class="price">
                    {{ $product->price_month }}
                </li>
                <li class="sells">
                    <span class="icon-basket"></span>
                    81
                </li>
                <li class="product-fav">
                    <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                </li>
                <li class="product-rating">
                    <ul class="list-unstyled">
                        @include('web.partials.stars')
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Ends: .product-excerpt -->
    </div>
    <!-- Ends: .product-single -->
</div>
<!-- Ends: .col-md-4 -->