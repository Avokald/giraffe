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
                    <h2 class="page-title">Название подборки</h2>
                    {{ Breadcrumbs::render('categories') }}
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


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="catalogx">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="catalog__search">
                        <form action="#">
                            <div class="searc-wrap">
                                <input type="text" placeholder="Search product here...">
                                <button type="submit" class="search-wrap__btn">
                                    <span class="icon-magnifier"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <h3 class="catalogx__title">Возможности</h3>
                    <div class="catalogx__items">
                        <a href="" class="catalogx__item">Все</a>
                        @foreach ( $allCategories as $category )
                            <a href="{{ route('categories.show', $category->slug ) }}" class="catalogx__item">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="catalog__search">
                    </div>
                    <h3 class="catalogx__title">Все категории</h3>
                    <div class="catalog__flex">
                        <div class="row">
                            @foreach ( $categories as $category )
                                <div class="col-lg-6 col-md-6">
                                    <a href="{{ route('categories.show', $category->slug) }}" class="catalog__box">
                                        @if ($category->logo)
                                            <div class="catalog__image">
                                                <img src="{{ $category->logo->url }}" alt="{{ $category->logo->alt }}">
                                            </div>
                                        @endif
                                        <div class="catalog__content">
                                            <div class="catalog__name">{{ $category->name }}</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $categories->links('web.partials.pagination') }}
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

@endsection

