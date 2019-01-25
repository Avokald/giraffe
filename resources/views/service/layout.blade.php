@extends('../app')



@section('content')
    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    @section('item-preview')
                        @include('service.partials.item_preview')
                    @show

                    <div class="item-info">
                        @section('item-navigation')
                            @include('service.partials.item_navigation')
                        @show

                        <div class="tab-content">
                            @section('product-details')
                                @include('service.partials.product_details')
                            @show
                        </div>

                        <div class="dzdzx">

                            @foreach ( $service->pdfs as $pdf )
                                <a href="{{ $pdf->url }}">{{ $pdf->name }}</a><hr>
                            @endforeach

                            @foreach ( $service->documents as $document )
                                <a href="{{ $document->url }}">{{ $document->name }}</a><hr>
                            @endforeach

                            @foreach ( $service->presentations as $presentation )
                                <a href="{{ $presentation->url }}">{{ $presentation->name }}</a><hr>
                            @endforeach

                            @foreach ( $service->videos as $video )

                                <h3>{{ $video->name }}</h3>
                                <?php
                                preg_match(
                                    '/^((?:https?:)?\/\/)?((?:www|m)\.)?((?:youtube\.com|youtu.be))(\/(?:[\w\-]+\?v=|embed\/|v\/)?)([\w\-]+)(\S+)?$/',
                                    $video->url,
                                    $url_groups );
                                ?>
                                @if ( $url_groups[5] )
                                    <iframe width="560"
                                            height="315"
                                            src="https://www.youtube.com/embed/{{ $url_groups[5] }}"
                                            frameborder="0"
                                            allow="accelerometer;
                                                   autoplay;
                                                   encrypted-media;
                                                   gyroscope;
                                                   picture-in-picture"
                                            allowfullscreen >
                                    </iframe>
                                @endif
                            @endforeach


                            <div class="featured_event edit">
                                <div class="event_img">
                                    <img src="/public/images/ev1.jpg" alt="event thumbnail">
                                </div>

                                <div class="v_middle">
                                    <div class="featured_event_detail">
                                        <h2><a href="event-detail.html">Digital Product Market Upcoming Event in
                                                New York</a></h2>
                                        <ul class="date_place">
                                            <li>
                                                <span class="icon-calendar"></span>
                                                <p>May 17-19, 2018</p>
                                            </li>

                                            <li>
                                                <span class="icon-location-pin"></span>
                                                <p>Dhaka, Bangladesh</p>
                                            </li>
                                        </ul>
                                        <ul class="countdown"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="card_style1">
                                        <figure class="card_style1__info">
                                            <img src="/public/images/ev2.jpg" alt="Event card thumbnail">

                                            <figcaption>
                                                <a href="event-detail.html">
                                                    <h4>Web Design Conference in California</h4>
                                                </a>
                                                <ul class="date_place">
                                                    <li>
                                                        <span class="icon-calendar"></span>
                                                        <p>May 17-19, 2018</p>
                                                    </li>
                                                    <li>
                                                        <span class="icon-location-pin"></span>
                                                        <p>California</p>
                                                    </li>
                                                </ul>
                                            </figcaption>
                                            <!-- end /.figcaption -->
                                        </figure>
                                        <!-- end /.figure -->
                                    </div>
                                    <!-- end /.event_card -->
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="card_style1">
                                        <figure class="card_style1__info">
                                            <img src="/public/images/ev2.jpg" alt="Event card thumbnail">

                                            <figcaption>
                                                <a href="event-detail.html">
                                                    <h4>Web Design Conference in California</h4>
                                                </a>
                                                <ul class="date_place">
                                                    <li>
                                                        <span class="icon-calendar"></span>
                                                        <p>May 17-19, 2018</p>
                                                    </li>
                                                    <li>
                                                        <span class="icon-location-pin"></span>
                                                        <p>California</p>
                                                    </li>
                                                </ul>
                                            </figcaption>
                                            <!-- end /.figcaption -->
                                        </figure>
                                        <!-- end /.figure -->
                                    </div>
                                    <!-- end /.event_card -->
                                </div>
                            </div>

                            @section('tariffs')
                                @include('service.partials.tariffs')
                            @show


                            <div class="dzdzx__title">
                                <h3>Отзывы</h3>
                            </div>

                            <div class="row zog">
                                <div class="thread">
                                    <ul class="media-list thread-list">
                                        @foreach ( $service->reviews as $review )
                                            <li class="single-thread">
                                                @include('service.partials.review')

                                                <!-- nested comment markup -->
                                                @if ( $review->replies )
                                                    <ul class="children">
                                                        @foreach ( $review->replies as $reply )
                                                            @include('service.partials.review_reply')
                                                        @endforeach
                                                    </ul>
                                                @endif

                                                <!-- reply to the current parent review -->
                                                @section('review-reply-form')
                                                    @include('service.partials.review_reply_form')
                                                @show
                                            </li>
                                            <!-- end single comment thread /.comment-->
                                        @endforeach
                                    </ul>


                                    <!-- Start Pagination -->
                                    <nav class="pagination-default comments-pagination">
                                        {{ $service->reviews->links('service.partials.reviews_pagination') }}
                                    </nav>
                                    <!-- Ends: /pagination-default -->

                                    {{-- TODO Reply to the current review --}}
                                    <div class="comment-form-area">
                                        <h4>Leave a comment</h4>
                                        <!-- comment reply -->
                                        <div class="media comment-form">
                                            <div class="media-left">
                                                <a href="#">
                                                    <img class="media-object" src="/public/images/m7.png" alt="Commentator Avatar">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <form action="#" class="comment-reply-form">
                                                    <textarea name="reply-comment" placeholder="Write your comment..."></textarea>
                                                    <button class="btn btn--sm btn-primary">Post Comment</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!-- comment reply -->
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('service.partials.sidebar')
            </div>
        </div>
    </section>


    @section('related')
        @include('service.partials.related')
    @show

@endsection

@section('title', $service->name)
@section('logo-link', $service->logo->url)
@section('logo-alt', $service->logo->alt)
@section('banner-link', $service->banner->url)
@section('name', $service->name)
@section('description-short', $service->description_short)

@include('partials.variables')

