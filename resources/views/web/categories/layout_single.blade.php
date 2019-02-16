{{-- TODO Language --}}
@extends('web.app')


@section('content')
    <!-- ================================
    Start Hero Area
    ================================= -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    {{ Breadcrumbs::render('category', $category) }}
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!-- ================================
    End Hero Area
    ================================= -->

    <!--================================
        START FILTER AREA
    =================================-->
    <div class="filter-area product-filter-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="filter-bar">
                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Категория
                                <span class="icon-arrow-down"></span>
                            </a>
                            <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                                @foreach ( $allCategories as $category )
                                    <li>
                                        <a href="">{{ $category->name }}
                                            <span>TODO</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown">
                            <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">По популярности
                                <span class="icon-arrow-down"></span>
                            </a>
                            <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                                <li>
                                    <a href="#">Trending items</a>
                                </li>
                                <li>
                                    <a href="#">Popular items</a>
                                </li>
                                <li>
                                    <a href="#">New items </a>
                                </li>
                                <li>
                                    <a href="#">Best seller </a>
                                </li>
                                <li>
                                    <a href="#">Best rating </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.filter__option -->

                        <div class="filter__option filter--dropdown filter--range">
                            <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">Сначала дорогие
                                <span class="icon-arrow-down"></span>
                            </a>
                            <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                                <div class="range-slider price-range"></div>

                                <div class="price-ranges">
                                    <span class="from rounded">$30</span>
                                    <span class="to rounded">$300</span>
                                </div>
                            </div>
                        </div>
                        <!-- end /.filter__option -->
                        <!-- end /.filter__option -->
                    </div>
                    <!-- end /.filter-bar -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end filter-bar -->
        </div>
    </div>
    <!-- end /.filter-area -->
    <!--================================
        END FILTER AREA
    =================================-->



    <!--================================
        START Product Grid
    =================================-->
    <section class="product-grid p-bottom-100">
        <div class="container">
            <div class="section-title">
                <h2>Сервисы</h2>
            </div>
            <div class="row">
                <!-- Start .product-list -->
                <div class="col-md-12 product-list">
                    <div class="row">
                        @foreach ( $services as $service )
                            @include('web.partials.product_card', [
                                'product' => $service,
                                'singleRoute' => route('services.show', $service->slug),
                            ])
                        @endforeach
                    </div>
                </div>
                <!-- Ends: .product-list -->
            </div>
        </div>
    </section>
    <!--================================
        START Product Grid
    =================================-->

    @include('web.partials.promotion')
@endsection
