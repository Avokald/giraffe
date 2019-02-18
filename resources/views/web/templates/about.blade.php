@extends('web.app')

@section('content')
    <!--================================
    START ABOUT HERO AREA
    =================================-->
    <section class="about_hero bgimage">
        <div class="bg_image_holder">
            <img src="{{ \App\Image::find($page->getElementByName("banner")->values ?? 1)->url ?? '' }}" alt="">
        </div>

        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="about_hero_contents">
                        {{ Breadcrumbs::render('about') }}
                        <h1 class="display-4">Добро пожаловать в
                            <span>SoftBox</span> {{-- $page->content --}}
                        </h1>
                        <p class="display-4">Мы помогаем маркетологам создавать продукты
                        </p>

                        <div class="about_hero_btns">
                            <a href="#" class="play_btn btn btn--lg btn-primary" data-toggle="modal" data-target="#myModal"
                               data-theVideo="{{ $page->getElementByName("about_button_link")->values }}">
                                <span class="icon-control-play"></span>Смотреть видео</a>
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
            @php
                $rightBlockImage = $page->getElementByName("right_image_block")->values ?? 1;
                $rightBlockText = $page->getElementByName("right_text_block")->values ?? 1;
            @endphp
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5">
                        <div class="content_area m-bottom-md">{!!
                            $rightBlockText
                        !!}</div>
                    </div>
                    <!-- end /.col-md-5 -->
                    <div class="col-lg-6 offset-lg-1">
                        <img src="{{ \App\Image::find($rightBlockImage)->url }}" alt="" class="img-fluid">
                    </div>
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.about -->

        <div class="content_block2">
            @php
                $leftBlockImage = $page->getElementByName("left_image_block")->values;
                $leftBlockText = $page->getElementByName("left_text_block")->values;
            @endphp
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 m-bottom-md">
                        <img src="{{ \App\Image::find($leftBlockImage)->url }}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="content_area">{!!
                        $leftBlockText
                        !!}</div>
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
                        {!! $page->getElementByName("members_description")->values !!}
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <div class="row">
                @php
                $members = $page->getElementByName("members")->values;
                @endphp
                @if ($members)
                    @foreach ($members as $member)
                        <div class="col-xl-3 col-lg-4 col-md-6">
                            <div class="team-single">
                                <figure>
                                    @if (isset($member["member"]["profile_picture"]))
                                        <img src="{{ App\Image::find($member["member"]["profile_picture"])->url }}"
                                             alt="" class="img-fluid rounded-circle">
                                    @endif
                                    <figcaption>
                                        <h5>{{ $member["member"]["name"] }}</h5>
                                        <span class="member-title">{{ $member["member"]["position"] }}</span>
                                        <ul class="list-unstyled team-social">
                                            @if (isset($member["member"]["email"]))
                                                <li>
                                                    <a href="{{ $member["member"]["email"] }}">
                                                        <span class="icon-envelope-open"></span>
                                                    </a>
                                                </li>
                                            @endif

                                            @if (isset($member["member"]["facebook"]))
                                                <li>
                                                    <a href="{{ $member["member"]["facebook"] }}">
                                                        <span class="icon-social-facebook"></span>
                                                    </a>
                                                </li>
                                            @endif

                                            @if (isset($member["member"]["twitter"]))
                                                <li>
                                                    <a href="{{ $member["member"]["twitter"] }}">
                                                        <span class="icon-social-twitter"></span>
                                                    </a>
                                                </li>
                                            @endif

                                            @if (isset($member["member"]["basket"]))
                                                <li>
                                                    <a href="{{ $member["member"]["basket"] }}">
                                                        <span class="icon-social-dribbble"></span>
                                                    </a>
                                                </li>
                                            @endif
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                        <!-- Ends: .col-lg-3 -->
                    @endforeach
                @endif
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
                        {!! $page->getElementByName("partners_description")->values !!}
                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
            @php
            $partners = $page->getElementByName("Partners")->values;
            @endphp
            @if ($partners)
                <div class="row">
                    <div class="col-md-12">
                        <div class="partners">
                            @foreach ($partners as $partner)
                                <div class="partner">
                                    <img src="{{ \App\Image::find($partner["partner"])->url }}" alt="partner image">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- end /.row -->
            @endif
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PARTNER AREA
    =================================-->
    <div class="modal fade video_modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <iframe width="500" allowfullscreen></iframe>
            </div>
        </div>
    </div>
@endsection