<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            <div class="repeater-list">
                @if ( isset($element->values) )
                    @foreach ( $element->values as $key => $value )
                        <div class="{{ $class }} repeater-item">
                            <br><input type="{{ $type }}" name="{{ $name }}[]" value="{{ $value }}">

                            <button class="repeater-delete-el">X</button>
                        </div>
                    @endforeach
                @endif
            </div>
            <label>{{ $label }}</label>
            {{--<div class="help-block">This is a help block!</div>--}}
            <button class="btn btn--default repeater-add-el" data-block-type="{{ $class }}">+</button>
        </div>
    </div>
</div>

@push('hidden')
    <div class="{{ $class }} repeater-item">
        <br><input type="{{ $type }}" name="{{ $name }}">
        <button class="repeater-delete-el">X</button>
    </div>
@endpush
