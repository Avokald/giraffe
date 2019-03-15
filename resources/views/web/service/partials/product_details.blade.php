@section('product-details')
    <div class="fade show tab-pane product-tab active" id="tazz1">
        <div class="tab-content-wrapper" >
            <h3>{{ $phrases->where('slug', 'description')->first()->value ?? '' }}</h3>
            {!! $service->description_long !!}
            <h3 id="tazz2">{{ $phrases->where('slug', 'materials')->first()->value ?? '' }}</h3>
            {!! $service->materials_description !!}
        </div>
    </div>
@endsection