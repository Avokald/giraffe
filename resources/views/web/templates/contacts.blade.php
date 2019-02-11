@extends('web.app')

@section('content')

    <!--================================
    START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    <h2 class="page-title">Контакты</h2>
                    <div class="breadcrumb">
                        <ul>
                            <li>
                                <a href="#">Главная</a>
                            </li>
                            <li class="active">
                                <a href="#">Контакты</a>
                            </li>
                        </ul>
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

    <!--================================
        START AFFILIATE AREA
    =================================-->
    <section class="contact-area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-12 cont">
                            <div class="section-title">
                                {!! $page->content !!}
                            </div>
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="contact_tile">
                                <?php
                                $addressesElement = $page->getElementByName("addresses");
                                ?>
                                <span class="tiles__icon icon-location-pin"></span>
                                <h4 class="tiles__title">Office Address</h4>
                                <div class="tiles__content">
                                    @foreach ( $addressesElement->values as $address )
                                        <p>{{ $address }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4">
                            <?php
                            $phoneNumbersElement = $page->getElementByName("phone_numbers");
                            ?>
                            <div class="contact_tile">
                                <span class="tiles__icon icon-earphones"></span>
                                <h4 class="tiles__title">Phone Number</h4>
                                <div class="tiles__content">
                                    @foreach ( $phoneNumbersElement->values as $phoneNumber )
                                        <p>{{ $phoneNumber }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <!-- end /.contact_tile -->
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-4">
                            <?php
                            $emailAddressesElement = $page->getElementByName("email_addresses");
                            ?>
                            <div class="contact_tile">
                                <span class="tiles__icon icon-envelope-open"></span>
                                <h4 class="tiles__title">Email Addresses</h4>
                                <div class="tiles__content">
                                    @foreach ( $emailAddressesElement->values as $emailAddress )
                                        <p>{{ $emailAddress }}</p>
                                    @endforeach
                                </div>
                            </div>
                            <!-- end /.contact_tile -->
                        </div>
                        <!-- end /.col-md-4 -->

                        <div class="col-md-12">
                            <div class="contact_form cardify">
                                <div class="contact_form__title">
                                    <h2>Leave Your Messages</h2>
                                </div>

                                <div class="row">
                                    <div class="col-lg-8 offset-lg-2">
                                        <div class="contact_form--wrapper">
                                            <form action="#">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Name">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Email">
                                                        </div>
                                                    </div>
                                                </div>

                                                <textarea cols="30" rows="10" placeholder="Yout text here"></textarea>

                                                <div class="sub_btn">
                                                    <button type="button" class="btn btn--md btn-primary">Отправить
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- end /.col-md-8 -->
                                </div>
                                <!-- end /.row -->
                            </div>
                            <!-- end /.contact_form -->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>

    <div id="map" data-lat="{{ $page->getElementByName("map")->values['lat'] }}" data-lng="{{ $page->getElementByName("map")->values['lng'] }}"></div>
    <!-- end /.map -->
@endsection