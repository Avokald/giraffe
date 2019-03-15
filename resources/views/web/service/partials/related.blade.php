
@if ($service->relatedServicesTo->isNotEmpty())
    <!--============================================
            START MORE PRODUCT ARE
        ==============================================-->
    <section class="latest-product section--padding oldxz">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>С этим продуктом будет эффективно</h2>
                    </div>
                </div>
                <div class="col-md-12 bgdor">
                    <div class="product-slide-area owl-carousel">
                        @foreach ($service->relatedServicesTo as $relatedService)
                            @include('web.partials.product_card_carousel', [
                                'product' => $relatedService,
                                'singleRoute' => route('services.show', $relatedService->slug),
                            ])
                        @endforeach
                    </div>
                </div>
                <!-- Ends: .col-md-12/Section Title -->
                <!-- Ends: .product-list -->
            </div>
        </div>
    </section>

    <!--============================================
        END MORE PRODUCT AREA
    ==============================================-->
@endif