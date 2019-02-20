<div class="row xxx" id="tazz3">
    <div class="col-lg-12">
        <div class="pricing-wrapper">
            @foreach( $service->tariffs as $tariff)
                @include('web.service.partials.tariff')
            @endforeach
        </div>
    </div>
</div>