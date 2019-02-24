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
                                <img src="{{ $companyLogo->url ?? '/public/images/logo.png' }}" alt="" class="img-fluid">
                                <ul class="contact-details">
                                    <li>
                                        <span class="icon-earphones"></span>
                                        Call Us:
                                        <a href="tel:{{ $mainPhoneNumber }}">{{ $mainPhoneNumber }}</a>
                                    </li>
                                    <li>
                                        <span class="icon-envelope-open"></span>
                                        <a href="mailto:{{ $mainEmailAddress }}">{{ $mainEmailAddress }}</a>
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
                                        <h5 class="footer-widget-title">{{ $menuElement->name }}</h5>
                                        @if ($menuElement->subMenuElements->isNotEmpty())
                                            <ul>
                                                @foreach ($menuElement->subMenuElements as $subMenuElement)
                                                    <li>
                                                        <a href="{{ $subMenuElement->url }}">{{ $subMenuElement->name }}</a>
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
                        <?php
                        $copyrightMenuElements = $menus->where('slug', 'copyright-menu')->first()->menuElements ?? null;
                        ?>
                        @if ($copyrightMenuElements)
                            <div class="copyright-text">
                                @foreach ($copyrightMenuElements as $menuElement)
                                    <p>{{ $menuElement->name }}</p>
                                @endforeach
                            </div>
                        @endif
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