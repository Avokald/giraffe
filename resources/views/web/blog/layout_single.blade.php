@extends('web.app')



@section('content')
    <!--================================
    START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    {{ Breadcrumbs::render('blogpost', $blogpost) }}
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
        START LOGIN AREA
    =================================-->
    <section class="blog_area p-top-100 p-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="single_blog blog--default">
                        <article>
                            @if ($blogpost->banner)
                                <figure>
                                    <img src="{{ $blogpost->banner->url }}" alt="{{ $blogpost->banner->alt }}">
                                </figure>
                            @endif
                            <div class="blog__content">
                                <a href="#" class="blog__title">
                                    <h3>{{ $blogpost->title }}</h3>
                                </a>

                                {{-- TODO insert user profile --}}
                                @include('web.blog.partials.metadata')
                            </div>

                            <div class="single_blog_content">
                                 {!! $blogpost->content !!}

                                {{-- TODO insert data--}}
                                @include('web.blog.partials.share')
                            </div>
                        </article>
                    </div>
                    <!-- end /.single_blog -->

                    {{-- TODO insert data--}}
                    @include('web.blog.partials.author_info')
                </div>
                <!-- end /.col-md-8 -->

                {{-- TODO insert data--}}
                @include('web.blog.partials.sidebar', ['tags' => $blogpost->tags])

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->
@endsection


