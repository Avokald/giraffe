{{-- TODO Language --}}
@extends('web.app')



@section('content')
    <!--================================
    START BREADCRUMB AREA
=================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    {{ Breadcrumbs::render('blog') }}
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


    <<section class="blog_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    @foreach ( $blogposts as $blogpost )
                        <div class="single_blog blog--default">
                            <figure>
                                @if ($blogpost->banner)
                                    <img src="{{  $blogpost->banner->url }}" alt="Blog image">
                                @endif

                                <figcaption>
                                    <div class="blog__content">
                                        <a href="{{ route('blogposts.show', $blogpost->slug) }}" class="blog__title">
                                            <h3>{{ $blogpost->title }}</h3>
                                        </a>

                                        <div class="blog__meta">
                                            <div class="author">
                                                <span class="icon-user"></span>
                                                <p><a href="{{ route( 'home', $blogpost->author->id ) }}">{{
                                                    $blogpost->author->name
                                                 }}</a></p>
                                            </div>
                                            <div class="date_time">
                                                <span class="icon-clock"></span>
                                                <p>{{ $blogpost->created_at->diffForHumans() }}</p>
                                            </div>
                                            <div class="comment_view">
                                                <p class="view">
                                                    <span class="icon-eye"></span>{{ $blogpost->view_count }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="btn_text">
                                        <p>{{ $blogpost->excerpt }}</p>
                                        <a href="{{ route('blogposts.show', $blogpost->slug) }}"
                                           class="btn btn--md btn-primary">{{ $phrases->where('slug', 'read-more')->first()->value ?? '' }}</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end /.single_blog -->
                    @endforeach


                    <!-- Start Pagination -->
                    {{ $blogposts->appends(request()->except('page'))->links('web.partials.pagination') }}
                    <!-- Ends: /pagination-default -->
                </div>
                <!-- end /.col-md-8 -->

                @include('web.blog.partials.sidebar', ['tags' => $allTags])

            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
            END LOGIN AREA
    =================================-->
@endsection


