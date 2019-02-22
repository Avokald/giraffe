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
                    {{ Breadcrumbs::render('category', $category) }}
                    <div class="ozon"><p>{{ $category->description }}</p></div>
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

    @include('web.partials.filter', ['type' => 1])

    <!--================================
        START Product Grid
    =================================-->
    <section class="product-grid p-bottom-100">
        <div class="container">
            <div class="section-title">
                <h2>Сервисы</h2>
            </div>
            <div class="row">
                <!-- Start .product-list -->
                <div class="col-md-12 product-list">
                    <div class="row">
                        @foreach ( $services as $service )
                            @include('web.partials.product_card', [
                                'product' => $service,
                                'singleRoute' => route('services.show', $service->slug),
                            ])
                        @endforeach
                    </div>
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
