@section('product-details')
    <div class="fade show tab-pane product-tab active" id="product-details" role="tabpanel"
         aria-labelledby="tab1">
        <div class="tab-content-wrapper">
            <h3>Landing Page Details</h3>
            <p class="p-bottom-30">{{ $service->description_long }}</p>
            <h3>Features With Image:</h3>
            <p>{{ $service->materials_description }}</p>

            @foreach ( $service->materialImages as $materialImage )
                <img src="{{ $materialImage->url }}" alt="{{ $materialImage->alt }}">
            @endforeach
        </div>
    </div>
@endsection