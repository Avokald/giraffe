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
                    <?php
                    $footerMenuElements = $menus->where('slug', 'footer-menu')->first()->menuElements ?? null;
                    ?>
                    @if ($footerMenuElements)
                        @foreach ($footerMenuElements as $menuElement)
                            <div class="col-lg-3 col-sm-6">
                                <div class="footer-widget">
                                    <div class="footer-menu">
                                        <h5 class="footer-widget-title">{{ $menuElement->title }}</h5>
                                        @if ($menuElement->subMenuElements->isNotEmpty())
                                            <ul>
                                                @foreach ($menuElement->subMenuElements as $subMenuElement)
                                                    <li>
                                                        <a href="{{ $subMenuElement->url }}">{{ $subMenuElement->title }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </div>
                                    <!-- end /.footer-menu -->
                                </div>
                                <!-- Ends: .footer-widget -->
                            </div>
                            <!-- end /.col-md-3 -->
                        @endforeach
                    @endif

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