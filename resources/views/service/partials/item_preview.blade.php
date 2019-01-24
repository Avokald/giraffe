@section('item-preview')
    <div class="item-preview">
        <div class="item-prev-area">
            <div class="item__preview-slider">
                <div class="prev-slide">
                    <img src="images/single1.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single2.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single3.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single1.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single2.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single3.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single1.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single2.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single3.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
                <div class="prev-slide">
                    <img src="images/single1.jpg" alt="Keep calm this isn't the end of the world, the preview is just missing.">
                </div>
            </div>
            <!-- end /.item--preview-slider -->
            <div class="prev-nav thumb-nav">
                <span class="lnr nav-left icon-arrow-left"></span>
                <span class="lnr nav-right icon-arrow-right"></span>
            </div>
            <!-- end /.prev-nav -->
        </div>
        <!-- Ends: /.item-prev-area -->

        <div class="item__preview-thumb">
            <div class="prev-thumb">
                <div class="thumb-slider">
                    @foreach ($service->screenshots as $screenshot)
                        <div class="item-thumb">
                            <img src="{{ $screenshot->url }}" alt="{{ $screenshot->alt }}">
                        </div>
                    @endforeach
                </div>
                <!-- end /.thumb-slider -->
            </div>
            <!-- end /.item__action -->

            <div class="item-activity">
                <div class="activity-single">
                    <p>
                        <span class="icon-basket"></span> Total Sales
                    </p>
                    <p>2451</p>
                </div>
                <div class="activity-single">
                    <p>
                        <span class="icon-star"></span> Reviews
                    </p>
                    <ul class="list-unstyled">
                        <li>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                        </li>
                        {{-- TODO Show reviews count. Same file problem --}}
                        <li>(@yield('reviews-count'))</li>
                    </ul>
                </div>
                <div class="activity-single">
                    <p>
                        <span class="icon-heart"></span>Favorities
                    </p>
                    <p>425</p>
                </div>
            </div>
            <!-- Ends: /.item-activity -->

        </div>
        <!-- end /.item__preview-thumb-->


    </div>
    <!-- end /.item-preview-->
@endsection