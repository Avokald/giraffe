<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            <div class="repeater-list">
                @if ( isset($value) )
                    @foreach ($value as $key => $element)
                        <div class="{{ $class }} repeater-item">
                            @include($template, [
                                'label' => '',
                                'name' => $name ?? '',
                                'value' => $element ?? '',
                            ])
                            <button class="repeater-delete-el">X</button>
                        </div>
                    @endforeach
                @endif
            </div>
            @if ($label)
                <label>{{ $label }}</label>
            @endif
            {{--<div class="help-block">This is a help block!</div>--}}
            <button class="btn btn--default repeater-add-el"
                    data-block-type="{{ $class }}">+</button>
        </div>
    </div>
</div>

@push('hidden')
    <div class="{{ $class }} repeater-item">
        @include($template, [
            'name' => $name,
            'value' => '',
            'label' => '',
       ])
        <button class="repeater-delete-el">X</button>
    </div>
@endpush
