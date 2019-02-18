<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            @if ( isset($element->subPageElements) )
                @foreach ( $element->subPageElements as $key => $subelement )
                    @include($subelement->template, [
                        'label' => ucfirst(str_replace('_', ' ', $subelement->name)) ?? '',
                        'name' => $name."[$subelement->name]" ?? '',
                        'class' => "$subelement->name-item" ?? '',
                        'id' => $subelement->name.$key ?? '',
                        'value' => $value[$subelement->name] ?? '',
                    ])
                @endforeach
            @endif
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>