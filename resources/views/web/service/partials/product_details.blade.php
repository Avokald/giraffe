@section('product-details')
    <div class="fade show tab-pane product-tab active" id="product-details" role="tabpanel"
         aria-labelledby="tab1">
        <div class="tab-content-wrapper">
            <h3>Landing Page Details</h3>
            {!! $service->description_long !!}
            <h3>Features With Image:</h3>
            {!! $service->materials_description !!}

            @foreach ( $service->materialImages as $materialImage )
                <img src="{{ $materialImage->url }}" alt="{{ $materialImage->alt }}">
            @endforeach
        </div>
    </div>
@endsection