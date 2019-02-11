<div class="form-group">
    <div class="col-sm-12">
        <div class="form-material">
            <input class="form-control file-ajax-upload"
                   type="file"
                   name="{{ $name }}"
                   value="{{ $value }}"
                   accept="application/pdf,
                           application/msword,
                           application/vnd.ms-powerpoint,
                           application/vnd.openxmlformats-officedocument.wordprocessingml.document,
                           application/vnd.openxmlformats-officedocument.presentationml.slideshow
                    ">
            <label>{{ $label }}</label>
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>