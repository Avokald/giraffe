<div class="form-group">
    <div class="col-sm-12">
        <div class="form-material">
            <input class="form-control"{{ isset($id) ? " id=$id" : ''}} type="text" name="{{ $name }}" value="{{ $value }}">
            <label>{{ $label }}</label>
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>