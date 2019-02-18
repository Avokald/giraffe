<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            <div class="repeater-list">
                @if ( isset($element->values) )
                    @foreach ($element->values as $key => $val)
                        <?php
                            $subPageElement = $element->subPageElements()->where('name', key($val))->first();
                        ?>
                        <div class="{{ $class }} repeater-item">
                            @include($subPageElement->template, [
                                'label' => $subPageElement->name,
                                'name' => $name."[$key][$subPageElement->name]" ?? '',
                                'element' => $subPageElement,
                                'id' => $subPageElement->name.$key ?? '',
                                'value' => $value[$key][$subPageElement->name] ?? '',
                            ])
                            <button class="repeater-delete-el">X</button>
                        </div>
                    @endforeach
                @else
                    @foreach ($element->subPageElements as $key => $subPageElement)
                        <div class="{{ $class }} repeater-item">
                            @include($subPageElement->template, [
                                'label' => $subPageElement->name,
                                'name' => $name."[$key][$subPageElement->name]" ?? '',
                                'element' => $subPageElement,
                                'id' => $subPageElement->name.$key ?? '',
                                'value' => $value[$key][$subPageElement->name] ?? '',
                            ])
                            <button class="repeater-delete-el">X</button>
                        </div>
                    @endforeach
                @endif
            </div>
            @if ($label)
                <label>{{ $label }}</label>
            @endif
            {{--<div class="help-block">This is a help block!</div>--}}
            <button class="btn btn--default repeater-add-el"
                    data-block-type="{{ $class }}"
                    data-counter="{{ @sizeof($value) ?? 1 }}">+</button>
        </div>
    </div>
</div>

@push('hidden')
    <div class="{{ $class }} repeater-item">
        @foreach ($element->subPageElements as $key => $subPageElement)
            @include($subPageElement->template, [
                    'label' => '',
                    'name' => $name."[<js-counter>][$subPageElement->name]" ?? '',
                    'element' => $subPageElement,
                    'value' => '',
                ])
        @endforeach
        <button class="repeater-delete-el">X</button>
    </div>
@endpush
