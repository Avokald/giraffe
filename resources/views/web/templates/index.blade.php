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
                        <h2>SoftBox</h2>
                        <p>Идейные соображения высшего порядка, а также новая модель организационной деятельности
                            позволяет выполнять важные задания <br>
                            по разработке систем массовогоучастия. Значимость этих проблем настолько очевидна, что
                            новая модель организационной деятельности в <br>
                            значительной степени обуславливает создание существенных
                        </p>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
                                    <figcaption>
                                        <ul class="list-unstyled stx">
                                            <li class="stars">
                                                            <span class="active">
                                                                <i class="fa fa-wrench"></i>
                                                            </span>
                                                <span  class="active">
                                                                <i class="fa fa-wrench"></i>
                                                            </span>
                                                <span  class="active">
                                                                <i class="fa fa-wrench"></i>
                                                            </span>
                                                <span  class="active">
                                                                <i class="fa fa-wrench"></i>
                                                            </span>
                                                <span>
                                                                <i class="fa fa-wrench"></i>
                                                            </span>
                                            </li>
                                        </ul>
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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

                    </div>
                </div>

                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Наиболее популярные сервисы</h2>
                    </div>
                </div>
                <div class="col-md-12 bgdor">
                    <div class="product-slide-area owl-carousel">
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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
                        <div class="product-single latest-single">
                            <div class="product-thumb">
                                <figure>
                                    <img src="images/product1.png" alt="" class="img-fluid">
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
                                    <a href="">E-commerce Shopping Cart</a>
                                </h5>
                                <ul class="titlebtm">
                                    <li>
                                        <img class="auth-img" src="images/auth-img2.png" alt="author image">
                                        <p>
                                            <a href="#">Theme-Valley</a>
                                        </p>
                                    </li>
                                    <li class="product_cat">
                                        in
                                        <a href="#">WordPress</a>
                                    </li>
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