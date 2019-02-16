<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            <div class="repeater-list">
                @if ( isset($element->values) )
                    @foreach ( $element->values as $key => $value )
                        <div class="{{ $class }} repeater-item">
                            <br><input type="{{ $type }}" name="{{ $name }}[{{ $key }}]['name']" value="{{ $value['name'] }}">
                            <br><input type="{{ $type }}" name="{{ $name }}[{{ $key }}]['position']" value="{{ $value['position'] }}">
                            <br><input type="{{ $type }}" name="{{ $name }}[{{ $key }}]['email']" value="{{ $value['email'] }}">
                            <br><input type="{{ $type }}" name="{{ $name }}[{{ $key }}]['facebook']" value="{{ $value['facebook'] }}">
                            <br><input type="{{ $type }}" name="{{ $name }}[{{ $key }}]['twitter']" value="{{ $value['twitter'] }}">
                            <br><input type="{{ $type }}" name="{{ $name }}[{{ $key }}]['ball']" value="{{ $value['ball'] }}">
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
        <br><input type="{{ $type }}" name="{{ $name }}[]['name']">
        <br><input type="{{ $type }}" name="{{ $name }}[]['position']">
        <br><input type="{{ $type }}" name="{{ $name }}[]['email']">
        <br><input type="{{ $type }}" name="{{ $name }}[]['facebook']">
        <br><input type="{{ $type }}" name="{{ $name }}[]['twitter']">
        <br><input type="{{ $type }}" name="{{ $name }}[]['ball']">
        <button class="repeater-delete-el">X</button>
    </div>
@endpush
