<!--================================
    START BREADCRUMB AREA
=================================-->
<section class="breadcrumb-area borzx" style="background-image: url('@yield("banner-link")');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 breadcrumb-contents">
                <div class="breadcrumb">
                    <ul>
                        <li>
                            <a href="#">Главная</a>
                        </li>
                        <li>
                            <a href="#">Каталог сервисов</a>
                        </li>
                        <li class="active">
                            <a href="#">Сервис</a>
                        </li>
                    </ul>
                </div>
                <div class="borzx__flex">
                    <div class="borzx__image">
                        <img src="@yield('logo-link')" alt="@yield('logo-alt')">
                    </div>
                    <div class="borzx__content">
                        <div class="borzx__name">@yield('name')</div>
                        <div class="borzx__text">@yield('description-short')</div>
                        <a href="" class="borzx__btn btn btn-lg btn-primary">Подключить</a>
                    </div>
                </div>
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