<div class="form-group">
    <div class="col-sm-12">
        <div class="form-material">
            <input class="form-control" type="number"
                   name="{{ $name }}" value="{{ $value }}"
                   step="0.1" min="0">
            @if (isset($label))
                <label>{{ $label }}</label>
            @endif
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>