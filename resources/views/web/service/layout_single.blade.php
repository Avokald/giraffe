@extends('web.app')


@section('content')
    <!--================================
        START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area borzx" style="background-image: url({{ $service->banner->url ?? '' }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    {{ Breadcrumbs::render('service', $service) }}
                    <div class="borzx__flex">
                        @if ($service->logo)
                            <div class="borzx__image">
                                <img src="{{ $service->logo->url ?? '' }}" alt="{{ $service->logo->alt }}">
                            </div>
                        @endif
                        <div class="borzx__content">
                            <div class="borzx__name">{{ $service->name }}</div>
                            <div class="borzx__text">{{ $service->description_short }}</div>
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

    <section class="single-product-desc">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    @if ($service->screenshots)
                        @section('item-preview')
                            @include('web.service.partials.item_preview')
                        @show
                    @endif

                    <div class="item-info">
                        @section('item-navigation')
                            @include('web.service.partials.item_navigation')
                        @show

                        <div class="tab-content">
                            @section('product-details')
                                @include('web.service.partials.product_details')
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

                            @section('tariffs')
                                @include('web.service.partials.tariffs')
                            @show

                            {{-- TODO Review display part 2 --}}
                            {{--<div class="dzdzx__title" id="tazz4">--}}
                                {{--<h3>Отзывы</h3>--}}
                            {{--</div>--}}

                            {{--<div class="row zog">--}}
                                {{--<div class="thread">--}}
                                    {{--<ul class="media-list thread-list">--}}
                                        {{--@foreach ( $service->reviews as $review )--}}
                                            {{--<li class="single-thread">--}}
                                                {{--@include('web.service.partials.review')--}}

                                                {{--<!-- nested comment markup -->--}}
                                                {{--@if ( $review->replies )--}}
                                                    {{--<ul class="children">--}}
                                                        {{--@foreach ( $review->replies as $reply )--}}
                                                            {{--@include('web.service.partials.review_reply', [--}}
                                                                {{--'reply' => $reply--}}
                                                            {{--])--}}
                                                        {{--@endforeach--}}
                                                    {{--</ul>--}}
                                                {{--@endif--}}

                                                {{-- reply to the current parent review --}}
                                                {{--@section('review-reply-form')--}}
                                                    {{--@include('web.service.partials.review_reply_form')--}}
                                                {{--@show--}}
                                            {{--</li>--}}
                                            {{--<!-- end single comment thread /.comment-->--}}
                                        {{--@endforeach--}}
                                    {{--</ul>--}}

                                    {{--@if ($service->reviews->isNotEmpty())--}}
                                        {{--<!-- Start Pagination -->--}}
                                        {{--<nav class="pagination-default comments-pagination">--}}
                                            {{--{{ $service->reviews->links('web.partials.pagination') }}--}}
                                        {{--</nav>--}}
                                        {{--<!-- Ends: /pagination-default -->--}}
                                    {{--@endif--}}

                                    {{-- TODO Reply to the current review --}}
                                    {{--<div class="comment-form-area">--}}
                                        {{--<h4>Оставьте свой отзыв</h4>--}}
                                        {{--<!-- comment reply -->--}}
                                        {{--<div class="media comment-form">--}}
                                            {{--<div class="media-left">--}}
                                                {{--<a href="#">--}}
                                                    {{--<img class="media-object" src="/public/images/m7.png" alt="Commentator Avatar">--}}
                                                {{--</a>--}}
                                            {{--</div>--}}
                                            {{--<div class="media-body">--}}
                                                {{--<form action="#" class="comment-reply-form">--}}
                                                    {{--<textarea name="reply-comment" placeholder="Ваш комментарий"></textarea>--}}
                                                    {{--<button class="btn btn--sm btn-primary">Отправить</button>--}}
                                                {{--</form>--}}
                                            {{--</div>--}}
                                        {{--</div>--}}
                                        {{--<!-- comment reply -->--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        </div>
                    </div>
                </div>

                @include('web.service.partials.sidebar')
            </div>
        </div>
    </section>


    @section('related')
        @include('web.service.partials.related')
    @show

@endsection

@section('name', $service->name)

