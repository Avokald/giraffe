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
                    {{ Breadcrumbs::render('compilation', $compilation) }}
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
                        @foreach ( $compilation->services as $service )
                            @include('web.partials.product_card_carousel', [
                                'product' => $service,
                                'singleRoute' => route( 'services.show', $service->slug ),
                            ])
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
