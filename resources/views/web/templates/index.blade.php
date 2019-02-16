@extends('web.app')

@section('content')
    <!-- ================================
        Start Hero Area
        ================================= -->
    <section class="hero-area bgimage">
        <div class="bg_image_holder">
            <img src="images/hero-image01.png" alt="background-image">
        </div>
        <!-- start hero-content -->
        <div class="hero-content content_above">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12">
                            <div class="hero__content__title">
                                <h2 class="display-5">
                                    Увеличим Ваши продажи с помощью внедрения <br> "AmoCRM" и CRM системы "Битрикс 24"
                                </h2>
                            </div>
                            <!-- end .hero__btn-area-->
                            <!--start search-area -->
                            <div class="search-area">
                                <div class="row">
                                    <div class="col-md-10 offset-md-1">
                                        <!-- start .search_box -->
                                        <div class="search_box">
                                            <form action="#">
                                                <input type="text" class="text_field" placeholder="Поиск...">
                                                <div class="search__select select-wrap">
                                                    <select name="category" class="select--field">
                                                        <option value="">Все категории</option>
                                                        <option value="">PSD</option>
                                                        <option value="">HTML</option>
                                                        <option value="">WordPress</option>
                                                        <option value="">Plugins</option>
                                                    </select>
                                                    <span class="icon-arrow-down"></span>
                                                </div>
                                                <button type="submit" class="search-btn btn--lg btn-primary">Найти</button>
                                            </form>
                                        </div>
                                        <!-- end ./search_box -->
                                    </div>
                                </div>
                            </div>
                            <!--start /.search-area -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->
    </section>
    <!-- ================================
    End Hero Area
    ================================= -->

    <!-- ================================
    Start Featured Area
    ================================= -->
    <section class="featured-area section--padding bgcolor">
        <div class="container">
            <div class="row">
                <!-- Start Section Title -->
                <div class="col-md-12">
                    <div class="section-title">
                        {!! $page->content !!}
                    </div>
                </div>
                <!-- Ends: .col-md-12/Section Title -->

                <!-- Start .product-slide-area -->
                <!-- Ends: .produ-slide-area -->
            </div>
        </div>
    </section>
    <!-- ================================
    End Featued Area
    ================================= -->

    <!-- ================================
    Start Latest Product
    ================================= -->
    <section class="latest-product section--padding">
        <div class="container">
            <div class="row">
                <!-- Start Section Title -->
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Наши подборки для развития Вашего бизнеса</h2>
                    </div>
                </div>
                <div class="col-md-12 bgdor">
                    <div class="product-slide-area owl-carousel">
                        @foreach ( $best_compilations as $compilation )
                            @include('web.partials.product_card_carousel', [
                                'product' => $compilation,
                                'singleRoute' => route('compilations.show', $compilation->id ),
                            ])
                        @endforeach
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Наиболее популярные сервисы</h2>
                    </div>
                </div>
                <div class="col-md-12 bgdor">
                    <div class="product-slide-area owl-carousel">
                        @foreach ( $best_services as $service )
                            @include('web.partials.product_card_carousel', [
                                'product' => $service,
                                'singleRoute' => route('compilations.show', $service->id ),
                            ])
                        @endforeach
                    </div>
                </div>
                <!-- Ends: .col-md-12/Section Title -->
                <!-- Ends: .product-list -->
            </div>
        </div>
    </section>
    <!-- ================================
    Ends Latest Product
    ================================= -->
    <!--================================
        Start Subscribe
    =================================-->
    <section class="subscribe bgimage">
        <div class="bg_image_holder">
            <img src="images/subscribe-bg.png" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 col-md-12 subscribe-inner">
                    <div class="envelope-svg">
                        <img src="images/svg/newsletter.svg" alt="" class="svg">
                    </div>
                    <p>Subscribe to get the latest themes, templates and offer information. Don't worry, we won't send
                        spam!</p>
                    <form action="#">
                        <div class="form-group">
                            <input type="text" placeholder="Введите ваш e-mail..." required>
                            <button type="submit" class="btn btn--sm btn-primary">Отправить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        End Subscribe
    =================================-->
@endsection