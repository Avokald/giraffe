{{-- TODO Language --}}
@extends('web.app')


@section('content')
    <!--================================
    START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    <h2 class="page-title">Название подборки</h2>
                    @include('web.partials.bread')
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END BREADCRUMB AREA
    =================================-->


    <!--============================================
    START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="single-product-desc" id="product-details">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 bild">
                    <div class="item-preview">
                        <h2>{{ $compilation->name }}</h2>
                        {!! $compilation->description !!}
                    </div>

                </div>
                <!-- end /.col-md-8 -->

                <div class="col-lg-4 col-md-12 bild">
                    <aside class="sidebar sidebar--single-product">
                        <div class="sidebar-card card-pricing">
                            <div class="price">
                                <h1>от {{ $compilation->price_month }} руб. <sup>мес</sup></h1>
                            </div>

                            <div class="purchase-button">
                                <a href="#" class="btn btn--lg btn-primary">Подключить</a>
                                <a href="#" class="btn btn--lg cart-btn btn-secondary">
                                    <span class="icon-heart"></span> Добавить в избранное</a>
                            </div>
                            <!-- end /.purchase-button -->
                        </div>
                        <!-- end /.author-card -->
                    </aside>
                    <!-- end /.aside -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

    <!--============================================
        START MORE PRODUCT ARE
    ==============================================-->
    <section class="latest-product section--padding oldxz">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Сервисы входящие в подборку</h2>
                    </div>
                </div>
                <div class="col-md-12 bgdor">
                    <div class="product-slide-area owl-carousel">
                        {{-- TODO styles are different for product_card and this . --}}
                        @foreach ( $compilation->services as $service )
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
                                        <a href="{{ route('services.show', $service->slug) }}">{{ $service->name }}</a>
                                    </h5>
                                    <ul class="titlebtm">
                                        <li>
                                            <img class="auth-img" src="/public/images/auth-img2.png" alt="author image">
                                            <p>
                                                <a href="#">Theme-Valley</a>
                                            </p>
                                        </li>
                                        @if ( $service->category )
                                            <li class="product_cat">
                                                in
                                                <a href="{{ route( 'categories.show', $service->category->slug ) }}">{{
                                                    $service->category->name
                                                }}</a>
                                            </li>
                                        @endif
                                    </ul>
                                    <ul class="product-facts clearfix">
                                        <li class="price">$20</li>
                                        <li class="sells">
                                            <span class="icon-basket"></span>81
                                        </li>
                                        <li class="product-fav">
                                            <span class="icon-heart" title="Add to collection" data-toggle="tooltip"></span>
                                        </li>
                                        <li class="product-rating">
                                            <ul class="list-unstyled">
                                                <li class="stars">
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                    <span>
                                                        <i class="fa fa-star"></i>
                                                    </span>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <!-- Ends: .product-excerpt -->
                            </div>
                        @endforeach
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
