<!-- Start .col-md-4 -->
<div class="col-lg-4 col-md-6">
    <div class="product-single latest-single">
        <div class="product-thumb">
            <figure>
                <img src="/public/images/product1.png" alt="" class="img-fluid">
                <figcaption>
                    <ul class="list-unstyled">
                        <li>
                            <a href="">
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
                <li>
                    <img class="auth-img" src="/public/images/auth-img2.png" alt="author image">
                    <p>
                        <a href="#">Theme-Valley</a>
                    </p>
                </li>
                @if ( $product->category )
                    <li class="product_cat">
                        in
                        <a href="{{ route( 'categories.show', $product->category->slug ) }}">{{ $product->category->name }}</a>
                    </li>
                @endif
            </ul>
            <ul class="product-facts clearfix">
                <li class="price">
                    $20
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
                        <li class="stars">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Ends: .product-excerpt -->
    </div>
    <!-- Ends: .product-single -->
</div>
<!-- Ends: .col-md-4 -->