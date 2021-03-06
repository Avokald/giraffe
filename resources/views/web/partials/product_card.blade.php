<!-- Start .col-md-4 -->
<div class="col-lg-4 col-md-6">
    <div class="product-single latest-single">
        <div class="product-thumb">
                @php
                    if ($product->services && $product->price_month && $product->price_year) {
                    $sale_value = ($product->price_month * 12  - $product->price_year) / ($product->price_month * 12) * 100;
                }
                @endphp
            @if (isset($sale_value) && $sale_value > 0)
                <div class="s-promotion">-{{ number_format($sale_value, 0) }}%</div>
            @endif
            <figure>
                <img src="{{ $product->logo->url ?? '' }}" alt="{{ $product->logo->alt ?? '' }}" class="img-fluid">
                <figcaption>
                <ul class="list-unstyled">
                    <li class="product__hover">
                        <div class="product__title">{{ $product->hover_title ?? '' }}</div>
                        <div class="product__text">{{ $product->hover_description ?? '' }}</div>
                    </li>
                    <li>
                        <a href="">Подключить</a>
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
                {!! $product->description ?? $product->description_short !!}
            </div>
            <ul class="product-facts clearfix">
                <li class="price">
                    {{ $product->price_month }}
                </li>
                <li class="sells">
                    <span class="icon-basket"></span>
                    0
                </li>
                <li class="product-fav">
                    <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                </li>
                <li class="product-rating">
                    <ul class="list-unstyled">
                        @include('web.partials.stars', ['product' => $product])
                        @include('web.partials.installation_difficulty', ['product' => $product])
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Ends: .product-excerpt -->
    </div>
    <!-- Ends: .product-single -->
</div>
<!-- Ends: .col-md-4 -->