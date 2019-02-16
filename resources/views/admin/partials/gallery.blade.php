<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            <div class="repeater-list">
                @if ( isset($value) )
                    @foreach ($value as $image)
                        {{-- TODO Does clearfix really needs to be here--}}
                        <div class="{{ $class }} repeater-item clearfix">
                            @include('admin.partials.image', [
                                'label' => '',
                                'name' => $name ?? '',
                                'value' => $image->id ?? '',
                            ])
                            <button class="ajax-image-delete repeater-delete-el" data-image-id="{{ $image->id ?? '' }}">X</button>
                        </div>
                    @endforeach
                @endif
            </div>
            <label>{{ $label }}</label>
            {{--<div class="help-block">This is a help block!</div>--}}
            <div class="col-sm-12">
                <button class="btn btn--default repeater-add-el"
                        data-block-type="{{ $class }}">+</button>
            </div>
        </div>
    </div>
</div>

@push('hidden')
    {{-- TODO Does clearfix really needs to be here--}}
    <div class="{{ $class }} repeater-item clearfix">
        @include('admin.partials.image', [
            'name' => $name,
            'value' => '',
            'label' => '',
       ])
        <button class="repeater-delete-el">X</button>
    </div>
@endpush
