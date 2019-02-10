@extends('web.app')

@section('content')
    <!--================================
    START ABOUT HERO AREA
    =================================-->
    <section class="about_hero bgimage">
        <div class="bg_image_holder">
            <img src="images/about_hero.jpg" alt="">
        </div>

        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_hero_contents">
                        @include('web.partials.bread')
                        <h1 class="display-4">Добро пожаловать в
                            <span>SoftBox</span> {{-- $page->getElementByName("title")->values[0] --}}
                        </h1>
                        <p class="display-4">Мы помогаем маркетологам создавать продукты
                        </p>

                        <div class="about_hero_btns">
                            <a href="#" class="play_btn btn btn--lg btn-primary" data-toggle="modal" data-target="#myModal"
                               data-theVideo="https://www.youtube.com/embed/lvtfD_rJ2hE">
                                <span class="icon-control-play"></span> Смотреть видео</a>
                            <a href="#" class="btn btn-light btn--lg">Присоединяйтесь К Нам Сегодня</a>
                        </div>
                    </div>
                    <!-- end /.about_hero_contents -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row-->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END ABOUT HERO AREA
    =================================-->

    <!--================================
        END ABOUT HERO AREA
    =================================-->
    <section class="about_mission">
        <div class="content_block1">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="content_area m-bottom-md">
                            <h1 class="content_area--title">О
                                <span class="highlight"> SoftBox</span>
                            </h1>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler isque the mattis,
                                leo quam aliquet congue this there placerat mi id nisi they interdum mollis. Praesent
                                pharetra justo ut sceleris que the mattis. <br><br> Leo quam aliquet. Nunc placer atmi id nisi interdum mollis
                                quam. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt sanctus est Lorem ipsum dolor sit amet consetetur sadipscing.</p>
                        </div>
                    </div>
                    <!-- end /.col-md-5 -->
                    <div class="col-lg-6 offset-lg-1">
                        <img src="images/ab1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.about -->

        <div class="content_block2">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 m-bottom-md">
                        <img src="images/ab2.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="content_area">
                            <h1 class="content_area--title">
                                <span class="highlight">Миссия </span> SoftBox
                            </h1>
                            <p>Nunc placerat mi id nisi interdum mollis. Praesent pharetra justo ut sceler isque the mattis,
                                leo quam aliquet congue this there placerat mi id nisi they interdum mollis. Praesent
                                pharetra justo ut sceleris que thes. <br><br> Mattis leo quam aliquet. Nunc placer atmi id nisi interdum mollis
                                quam. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                                invidunt sanctus est Lorem ipsum dolor sit amet consetetur sadipscing.</p>
                        </div>
                    </div>
                    <!-- end /.col-md-6 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.mission-->
    </section>
    <!--================================
        END ABOUT HERO AREA
    =================================-->


    <!--================================
        START COUNTER UP AREA2
    =================================-->
    <section class="counter-up-area counter-up--area2 p-top-40 p-bottom-40">
        <!-- start .container -->
        <div class="container">
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="counter-up">
                        <div class="counter warning">
                            <span class="icon-briefcase"></span>
                            <span class="count_up">38436</span>
                            <p>Вещи на продажу</p>
                        </div>
                        <div class="counter info">
                            <span class="icon-basket"></span>
                            <span class="count_up">68254</span>
                            <p>Тотальная распродажа</p>
                        </div>
                        <div class="counter secondary">
                            <span class="icon-emotsmile"></span>
                            <span class="count_up">25546</span>
                            <p>Счастливые клиенты</p>
                        </div>
                        <div class="counter danger">
                            <span class="icon-people"></span>
                            <span class="count_up">76358</span>
                            <p>Члены</p>
                        </div>
                    </div>
                </div><!-- end /.col-md-12 -->
            </div>
        </div><!-- end /.container -->
    </section>
    <!--================================
        END COUNTER UP AREA2
    =================================-->

    <!--================================
        START DigiPro TEAM AREA
    =================================-->
    <section class="team_area">
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12 cont">
                    <div class="section-title">
                        <h1>Команда
                            <span class="highlighted">SoftBox</span>
                        </h1>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats.
                            Lid
                            est laborum dolo rumes fugats untras.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-single">
                        <figure>
                            <img src="images/team1.jpg" alt="" class="img-fluid rounded-circle">
                            <figcaption>
                                <h5>Дуглус Хунду</h5>
                                <span class="member-title">Генеральный директор и основатель</span>
                                <ul class="list-unstyled team-social">
                                    <li>
                                        <a href="">
                                            <span class="icon-envelope-open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Ends: .col-lg-3 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-single">
                        <figure>
                            <img src="images/team2.jpg" alt="" class="img-fluid rounded-circle">
                            <figcaption>
                                <h5>Мет киммел</h5>
                                <span class="member-title">Менеджер проектов</span>
                                <ul class="list-unstyled team-social">
                                    <li>
                                        <a href="">
                                            <span class="icon-envelope-open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Ends: .col-lg-3 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-single">
                        <figure>
                            <img src="images/team3.jpg" alt="" class="img-fluid rounded-circle">
                            <figcaption>
                                <h5>Джейсон Боун</h5>
                                <span class="member-title">Веб-разработчик</span>
                                <ul class="list-unstyled team-social">
                                    <li>
                                        <a href="">
                                            <span class="icon-envelope-open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Ends: .col-lg-3 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-single">
                        <figure>
                            <img src="images/team4.jpg" alt="" class="img-fluid rounded-circle">
                            <figcaption>
                                <h5>Бин Дайзел</h5>
                                <span class="member-title">UI / UX Developer</span>
                                <ul class="list-unstyled team-social">
                                    <li>
                                        <a href="">
                                            <span class="icon-envelope-open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Ends: .col-lg-3 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-single">
                        <figure>
                            <img src="images/team3.jpg" alt="" class="img-fluid rounded-circle">
                            <figcaption>
                                <h5>Бон Доу</h5>
                                <span class="member-title">Веб-разработчик</span>
                                <ul class="list-unstyled team-social">
                                    <li>
                                        <a href="">
                                            <span class="icon-envelope-open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Ends: .col-lg-3 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-single">
                        <figure>
                            <img src="images/team1.jpg" alt="" class="img-fluid rounded-circle">
                            <figcaption>
                                <h5>Джон Смит</h5>
                                <span class="member-title">Front-end Developer</span>
                                <ul class="list-unstyled team-social">
                                    <li>
                                        <a href="">
                                            <span class="icon-envelope-open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Ends: .col-lg-3 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-single">
                        <figure>
                            <img src="images/team4.jpg" alt="" class="img-fluid rounded-circle">
                            <figcaption>
                                <h5>Кевин Пери</h5>
                                <span class="member-title">PHP разработчик</span>
                                <ul class="list-unstyled team-social">
                                    <li>
                                        <a href="">
                                            <span class="icon-envelope-open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Ends: .col-lg-3 -->
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="team-single">
                        <figure>
                            <img src="images/team2.jpg" alt="" class="img-fluid rounded-circle">
                            <figcaption>
                                <h5>Кевин Морган</h5>
                                <span class="member-title">Младший дизайнер</span>
                                <ul class="list-unstyled team-social">
                                    <li>
                                        <a href="">
                                            <span class="icon-envelope-open"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-facebook"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-twitter"></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <span class="icon-social-dribbble"></span>
                                        </a>
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <!-- Ends: .col-lg-3 -->
            </div>
            <!-- Ends: .row -->

        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END DigiPro TEAM AREA
    =================================-->

    <!--================================
        START PARTNER AREA
    =================================-->
    <section class="partner-area section--padding partner--area2">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12 cont">
                    <div class="section-title">
                        <h1>Мы представлены
                            <span class="highlighted"> на</span>
                        </h1>
                        <p>Laborum dolo rumes fugats untras. Etharums ser quidem rerum facilis dolores nemis omnis fugats.
                            Lid
                            est laborum dolo rumes fugats untras.</p>
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                <div class="col-md-12">
                    <div class="partners">
                        <div class="partner">
                            <img src="images/cl01.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl02.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl03.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl04.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl02.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl03.png" alt="partner image">
                        </div>
                        <div class="partner">
                            <img src="images/cl04.png" alt="partner image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PARTNER AREA
    =================================-->

@endsection