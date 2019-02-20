@section('product-details')
    <div class="fade show tab-pane product-tab active" id="tazz1">
        <div class="tab-content-wrapper" >
            <h3>Описание</h3> {{-- TODO Description long w anchor --}}
            {!! $service->description_long !!}
            <h3 id="tazz2">Материалы:</h3> {{-- TODO Materials title w anchor --}}
            {!! $service->materials_description !!}

            {{--@foreach ( $service->materialImages as $materialImage )--}}
                {{--<img src="{{ $materialImage->url }}" alt="{{ $materialImage->alt }}">--}}
            {{--@endforeach--}}
        </div>
    </div>
@endsection