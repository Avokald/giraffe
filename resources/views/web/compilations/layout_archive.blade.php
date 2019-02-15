{{-- TODO Language --}}
@extends('web.app')


@section('content')
    <!-- ================================
    Start Hero Area
    ================================= -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    <h2 class="page-title">Подборки</h2>
                    @section('bread')
                        @include('web.partials.bread')
                    @show
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!-- ================================
    End Hero Area
    ================================= -->

    @include('web.partials.filter')


    <!--================================
        START Product Grid
    =================================-->
    <section class="product-grid p-bottom-100">
        <div class="container">
            <div class="section-title">
                <h2>Подборки</h2>
            </div>
            <div class="row">
                <!-- Start .product-list -->
                <div class="col-md-12 product-list">
                    <div class="row">
                        @foreach ( $compilations as $compilation )
                            @include('web.partials.product_card', [
                                'product' => $compilation,
                                'singleRoute' => route('compilations.show', $compilation->slug),
                            ])
                        @endforeach
                    </div>
                    <!-- Start Pagination -->
                    {{ $compilations->links('web.partials.pagination') }}
                    <!-- Ends: /pagination-default -->
                </div>
                <!-- Ends: .product-list -->
            </div>
        </div>
    </section>
    <!--================================
        START Product Grid
    =================================-->

    @include('web.partials.promotion')
@endsection
