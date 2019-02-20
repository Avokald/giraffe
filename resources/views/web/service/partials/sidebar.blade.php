
<div class="col-lg-4 col-md-12">
    <aside class="sidebar sidebar--single-product">
        <div class="sidebar-card card-pricing">
            @if ( $service->tariffs->isNotEmpty() )
                <div class="price">
                    <h1>
                        от {{ $service->tariffs[0]->price_month }} руб. <sup>мес</sup></h1>
                </div>
                <ul class="pricing-options">
                    <li>
                        <div class="custom-radio">
                            <input type="radio" id="opt1" class="" name="filter_opt" checked>
                            <label for="opt1">
                                <span class="circle"></span>{{ $service->tariffs[0]->name }} –
                                <span class="pricing__opt">{{ $service->tariffs[0]->price_month }} руб.</span>
                            </label>
                        </div>
                    </li>
                    <?php
                    $rest_tariffs = $service->tariffs->all();
                    array_shift($rest_tariffs);
                    ?>
                    @foreach ( $rest_tariffs as $key => $tariff )
                        <li>
                            <div class="custom-radio">
                                <input type="radio" id="opt{{ $key + 2}}" class="" name="filter_opt">
                                <label for="opt{{ $key + 2}}">
                                    <span class="circle"></span>{{ $tariff->name }} –
                                    <span class="pricing__opt">{{ $tariff->price_month }} руб.</span>
                                </label>
                            </div>
                        </li>
                    @endforeach

                </ul>
                <!-- end /.pricing-options -->
            @endif

            <div class="purchase-button">
                <a href="#" class="btn btn--lg btn-primary">Подключить</a>
                <a href="#" class="btn btn--lg cart-btn btn-secondary">
                    <span class="icon-heart"></span> Добавить в избранное</a>
            </div>
            <!-- end /.purchase-button -->
        </div>
        <!-- end /.sidebar--card -->


        <!-- end /.aside -->

        <div class="social-share-card sidebar-card">
            <p>Поделитесь:</p>
            <ul class="list-unstyled">
                <li>
                    <a href="">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Ends: /.social-share-card -->

        <!-- end /.author-card -->
    </aside>
    <!-- end /.aside -->
</div>
<!-- end /.col-md-4 -->