<!-- Start .col-md-4 -->
<div class="col-lg-4 col-md-6">
    <div class="product-single latest-single">
        <div class="product-thumb">
            <figure>
                <img src="{{ $product->logo->url ?? '' }}" alt="{{ $product->logo->alt ?? '' }}" class="img-fluid">
                <figcaption>
                    <ul class="list-unstyled">
                        <li>
                            <a href="{{-- TODO Cart --}}">
                                <span class="icon-basket"></span>
                            </a>
                        </li>
                        <li>
                            <a href="">Live Demo</a>
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