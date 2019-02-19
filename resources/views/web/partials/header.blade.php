@section('header')
    <!-- ================================
    START MENU AREA
    ================================= -->
    <!-- start menu-area -->
    <div class="menu-area">
        <div class="top-menu-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-fullwidth">
                            <div class="logo-wrapper">
                                <div class="logo logo-top">
                                    <a href="/"><img src="{{ $companyLogo->url ?? '/images/logo.png' }}" alt="logo image" class="img-fluid"></a>
                                </div>
                            </div>

                            <div class="menu-container">
                                <div class="d_menu">
                                    <nav class="navbar navbar-expand-lg mainmenu__menu">
                                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                                                aria-controls="bs-example-navbar-collapse-1" aria-expanded="false"
                                                aria-label="Toggle navigation">
                                            <span class="navbar-toggler-icon icon-menu"></span>
                                        </button>
                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                            <ul class="navbar-nav">
                                                <?php
                                                $headerMenuElements = $menus->where('slug', 'header-menu')->first()->menuElements ?? null;
                                                ?>
                                                @if ($headerMenuElements)
                                                    @foreach ($headerMenuElements as $menuElement)
                                                        <li{{ $menuElement->subMenuElements->isNotEmpty() ? ' class=has_dropdown' : '' }}>
                                                            <a href={{ $menuElement->url }}>{{ $menuElement->title }}</a>
                                                            @if ($menuElement->subMenuElements->isNotEmpty())
                                                                <div class="dropdown dropdown--menu">
                                                                    <ul>
                                                                        @foreach ($menuElement->subMenuElements as $subMenuElement)
                                                                           <li>
                                                                                <a href={{ $subMenuElement->url }}>{{ $subMenuElement->title }}</a>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                @endif
                                            </ul>
                                        </div>
                                        <!-- /.navbar-collapse -->
                                    </nav>
                                </div>
                            </div>

                            <div class="author-menu">
                                <!-- start .author-area -->
                                @if ($currentSaleLink || $currentSaleText)
                                    <div href="{{ $currentSaleLink }}" class="author-button">
                                        {!! $currentSaleText !!}
                                    </div>
                                @endif
                                <div class="author-area">
                                    <div class="search-wrapper">
                                        <a href="/favorits.html" class="nav_right_module search_module">
                                            <span class="icon-heart"></span>
                                        </a>
                                    </div>
                                    <div class="author__notification_area">
                                        <ul>
                                            <li class="has_dropdown">
                                                <div class="icon_wrap">
                                                    <span class="icon-basket-loaded"></span>
                                                    <span class="notification_count purch">0</span>
                                                </div>

                                                <div class="dropdown dropdown--cart">
                                                    <div class="cart_area">
                                                        <div class="cart_list">
                                                            <div class="cart_product">
                                                                <div class="product__info">
                                                                    <div class="thumbn">
                                                                        <img src="images/capro1.jpg" alt="cart product thumbnail">
                                                                    </div>

                                                                    <div class="info">
                                                                        <a class="title" href="single-product.html">Finance
                                                                            and Consulting Business Theme</a>
                                                                        <div class="cat">
                                                                            <a href="#">
                                                                                <img src="images/catword.png" alt="">Wordpress</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="product__action">
                                                                    <a href="#">
                                                                        <span class="icon-trash"></span>
                                                                    </a>
                                                                    <p>$60</p>
                                                                </div>
                                                            </div>
                                                            <div class="cart_product">
                                                                <div class="product__info">
                                                                    <div class="thumbn">
                                                                        <img src="images/capro2.jpg" alt="cart product thumbnail">
                                                                    </div>

                                                                    <div class="info">
                                                                        <a class="title" href="single-product.html">Flounce
                                                                            - Multipurpose OpenCart Theme</a>
                                                                        <div class="cat">
                                                                            <a href="#">
                                                                                <img src="images/catword.png" alt="">Wordpress</a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="product__action">
                                                                    <a href="#">
                                                                        <span class="icon-trash"></span>
                                                                    </a>
                                                                    <p>$60</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="total">
                                                            <p>
                                                                <span>Total :</span>$80</p>
                                                        </div>
                                                        <div class="cart_action">
                                                            <a class="btn btn-primary" href="cart.html">В корзину</a>
                                                            <a class="btn btn-secondary" href="checkout.html">Checkout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!--start .author-author__info-->
                                    <div class="author-author__info has_dropdown">
                                        <div class="author__avatar online">
                                            <img src="images/user-avater.png" alt="user avatar" class="rounded-circle">
                                        </div>

                                        <div class="dropdown dropdown--author">
                                            <div class="author-credits d-flex">
                                                <div class="author__avatar">
                                                    <img src="images/user-avater.png" alt="user avatar" class="rounded-circle">
                                                </div>
                                                <div class="autor__info">
                                                    <p class="name">
                                                        Chris Bent
                                                    </p>
                                                    <p class="amount">$20.45</p>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <a href="author.html">
                                                        <span class="icon-user"></span>Profile</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard.html">
                                                        <span class="icon-home"></span> Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-setting.html">
                                                        <span class="icon-settings"></span> Setting</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">
                                                        <span class="icon-basket"></span>Purchases</a>
                                                </li>
                                                <li>
                                                    <a href="favourites.html">
                                                        <span class="icon-heart"></span> Favourite</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-add-credit.html">
                                                        <span class="icon-credit-card"></span>Add Credits</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-statement.html">
                                                        <span class="icon-chart"></span>Sale Statement</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-upload.html">
                                                        <span class="icon-cloud-upload"></span>Upload Item</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-manage-item.html">
                                                        <span class="icon-notebook"></span>Manage Item</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-withdrawal.html">
                                                        <span class="icon-briefcase"></span>Withdrawals</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-logout"></span>Logout</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--end /.author-author__info-->
                                </div>
                                <!-- end .author-area -->

                                <!-- author area restructured for mobile -->
                                <div class="mobile_content ">
                                    <span class="icon-user menu_icon"></span>

                                    <!-- offcanvas menu -->
                                    <div class="offcanvas-menu closed">
                                        <span class="icon-close close_menu"></span>
                                        <div class="author-author__info">
                                            <div class="author__avatar v_middle">
                                                <img src="images/user-avater.png" alt="user avatar">
                                            </div>
                                        </div>
                                        <!--end /.author-author__info-->

                                        <div class="author__notification_area">
                                            <ul>
                                                <li>
                                                    <a href="cart.html">
                                                        <div class="icon_wrap">
                                                            <span class="icon-basket"></span>
                                                            <span class="notification_count purch">0</span>
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!--start .author__notification_area -->

                                        <div class="dropdown dropdown--author">
                                            <ul>
                                                <li>
                                                    <a href="author.html">
                                                        <span class="icon-user"></span>Profile</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard.html">
                                                        <span class="icon-home"></span> Dashboard</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-setting.html">
                                                        <span class="icon-settings"></span> Setting</a>
                                                </li>
                                                <li>
                                                    <a href="cart.html">
                                                        <span class="icon-basket"></span>Purchases</a>
                                                </li>
                                                <li>
                                                    <a href="favourites.html">
                                                        <span class="icon-heart"></span> Favourite</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-add-credit.html">
                                                        <span class="icon-credit-card"></span>Add Credits</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-statement.html">
                                                        <span class="icon-chart"></span>Sale Statement</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-upload.html">
                                                        <span class="icon-cloud-upload"></span>Upload Item</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-manage-item.html">
                                                        <span class="icon-notebook"></span>Manage Item</a>
                                                </li>
                                                <li>
                                                    <a href="dashboard-withdrawal.html">
                                                        <span class="icon-briefcase"></span>Withdrawals</a>
                                                </li>
                                                <li>
                                                    <a href="#">
                                                        <span class="icon-logout"></span>Logout</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="text-center">
                                            <a href="signup.html" class="author-area__seller-btn inline">Become a
                                                Seller</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- end /.mobile_content -->
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end  -->
    </div>
    <!-- end /.menu-area -->
    <!--================================
    END MENU AREA
    =================================-->
@endsection