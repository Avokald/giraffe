<div class="form-group">
    <div class="col-sm-12">
        <div class="form-material">
            <input class="form-control" type="text" name="{{ $name }}" value="{{ $value }}">
            @if (isset($label))
                <label>{{ $label }}</label>
            @endif
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>