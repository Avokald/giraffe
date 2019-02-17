@section('footer')
    <!--================================
        Start Footer
    =================================-->
    <footer class="footer-area footer--light">
        <div class="footer-big">
            <!-- start .container -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="widget-about">
                                <img src="/public/images/logo.png" alt="" class="img-fluid">
                                <ul class="contact-details">
                                    <li>
                                        <span class="icon-earphones"></span>
                                        Call Us:
                                        <a href="tel:344-755-111">344-755-111</a>
                                    </li>
                                    <li>
                                        <span class="icon-envelope-open"></span>
                                        <a href="mailto:support@aazztech.com">support@aazztech.com</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-4 -->


                    <div class="col-lg-3 col-sm-6">
                        <div class="footer-widget">
                            <div class="footer-menu footer-menu--1">
                                <h5 class="footer-widget-title">Популярные категории</h5>
                                <ul>
                                    <li>
                                        <a href="{{ route('services.index') }}">Каталог сервисов</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('compilations.index') }}">Подборки</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('blogposts.index') }}">Блог</a>
                                    </li>
                                    <li>
                                        {{-- TODO Pages --}}
                                        <a href="{{ route('about') }}">О нас</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- end /.footer-menu -->
                        </div>
                        <!-- Ends: .footer-widget -->
                    </div>
                    <!-- end /.col-md-3 -->



                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->

        <div class="mini-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright-text">
                            <p>&copy; 2018, SoftBox</p>
                        </div>

                        <div class="go_top">
                            <span class="icon-arrow-up"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--================================
    End Footer
    =================================-->
@endsection