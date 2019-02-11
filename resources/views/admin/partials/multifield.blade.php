<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            <h3>{{ $label }}</h3>
            <br>

            @if ( isset($element->values) )
                @foreach ( $element->values as $key => $value )
                    <?php
                    $subelement = \App\PageElement::findOrFail($value);
                    ?>
                    @include($subelement->pageElementType->template, [
                        'label' => ucfirst(str_replace('_', ' ', $subelement->name)),
                        'name' => "page_elements[$element->name][$subelement->name]",
                        'class' => "$subelement->name-item",
                        'type' => $subelement->pageElementType->name,
                        'id' => $subelement->html_id,
                        'element' => $subelement,
                        'value' => $subelement->values[0] ?? '',
                    ])
                @endforeach
            @endif
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>