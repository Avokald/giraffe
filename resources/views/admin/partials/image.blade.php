<div class="form-group">
    <div class="col-sm-3">
        <div class="form-material">
            <input class="form-control ajax-image-upload"
                   type="file"
                   accept="image/png, image/jpeg">
            <input class="ajax-image-id"
                   type="hidden"
                   name="{{ $name }}"
                   value="{{ $value }}">
            <label>{{ $label }}</label>
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>