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
                    <div class="ozon"><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste modi, quae velit tempora aliquid fugiat nobis fugit. Nulla autem sed quia excepturi tenetur, voluptates laudantium, natus labore tempore illum deleniti iusto culpa ratione illo assumenda necessitatibus? Aliquid deleniti optio modi exercitationem illo accusamus maiores asperiores consectetur maxime corrupti voluptatum voluptates qui fugiat at, totam eaque, rem illum nesciunt? Quas incidunt quod, alias delectus corporis ratione consectetur neque blanditiis qui possimus dicta eos magni enim illum consequatur odit similique eveniet quasi est. Sapiente voluptates animi tempore at molestias sint iure itaque eligendi. Nam iusto dolores possimus quas dolore dolorum! Enim aspernatur blanditiis possimus aliquam ad autem magni obcaecati vel omnis veritatis est quidem, recusandae earum officiis iusto distinctio ipsum, quos officia dicta inventore voluptates expedita minima? Consequatur minus obcaecati ex, fuga officiis tempora, doloremque eveniet dolorum enim maxime in similique animi voluptatibus, exercitationem delectus non inventore qui eius excepturi dolor eos. Quia sunt officiis eligendi porro at reprehenderit, maxime, minima enim atque laboriosam temporibus? Eaque quia esse aliquam nesciunt ipsum consectetur asperiores. Eum accusantium molestias, vitae necessitatibus ratione amet ducimus odio dicta placeat earum ex consequatur in voluptas commodi! Itaque nemo impedit ab placeat facere repellat temporibus, rem blanditiis molestias beatae!</p></div>
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
                                                <p><a href="{{ route( 'home', $blogpost->author->metadata->id ) }}">{{
                                                    $blogpost->author->metadata->name
                                                 }}</a></p>
                                            </div>
                                            <div class="date_time">
                                                <span class="icon-clock"></span>
                                                <p>{{ $blogpost->created_at->toFormattedDateString() }}</p>
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
                                           class="btn btn--md btn-primary">Прочитайте больше</a>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end /.single_blog -->
                    @endforeach


                    <!-- Start Pagination -->
                    {{ $blogposts->links('web.partials.pagination') }}
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


