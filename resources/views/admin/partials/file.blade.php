<div class="form-group">
    <div class="col-sm-12">
        <div class="form-material">
            <p class="ajax-file-name">{{ $value->name ?? '' }}</p>
            <input class="form-control ajax-file-upload"
                   type="file"
                   accept="application/pdf,
                           application/msword,
                           application/vnd.ms-powerpoint,
                           application/vnd.openxmlformats-officedocument.wordprocessingml.document,
                           application/vnd.openxmlformats-officedocument.presentationml.slideshow
                   ">
            <input type="hidden" class="ajax-file-id" name="{{ $name }}" value="{{ $value->id ?? '' }}">
            @if ($label)
                <label>{{ $label }}</label>
            @endif
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>