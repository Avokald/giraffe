<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            @if ($label)
                <h3 class="push-10">{{ $label }}</h3>
            @endif
            <div class="repeater-list">
                @if ( isset($element->values) )
                    @foreach ($element->values as $key => $val)
                        <?php
                            $subPageElement = $element->subPageElements()->where('name', key($val))->first();
                        ?>
                        <div class="{{ $class }} repeater-item col-sm-12">
                            @include($subPageElement->template, [
                                'label' => $subPageElement->name,
                                'name' => $name."[$key][$subPageElement->name]" ?? '',
                                'element' => $subPageElement,
                                'id' => $subPageElement->name.$key ?? '',
                                'value' => $value[$key][$subPageElement->name] ?? '',
                            ])
                            <button class="repeater-delete-el btn btn-danger pull-right col-sm-1">Удалить</button>
                        </div>
                    @endforeach
                {{--@else--}}
                    {{--@foreach ($element->subPageElements as $key => $subPageElement)--}}
                        {{--<div class="{{ $class }} repeater-item">--}}
                            {{--@include($subPageElement->template, [--}}
                                {{--'label' => $subPageElement->name,--}}
                                {{--'name' => $name."[$key][$subPageElement->name]" ?? '',--}}
                                {{--'element' => $subPageElement,--}}
                                {{--'id' => $subPageElement->name.$key ?? '',--}}
                                {{--'value' => $value[$key][$subPageElement->name] ?? '',--}}
                            {{--])--}}
                            {{--<button class="repeater-delete-el pull-right col-sm-1">X</button>--}}
                        {{--</div>--}}
                    {{--@endforeach--}}
                @endif
            </div>
            {{--<div class="help-block">This is a help block!</div>--}}
            <button class="btn btn-success repeater-add-el"
                    data-block-type="{{ $class }}"
                    data-counter="{{ @sizeof($value) ?? 1 }}">Добавить</button>
        </div>
    </div>
</div>

@push('hidden')
    <div class="{{ $class }} repeater-item col-sm-10">
        @foreach ($element->subPageElements as $key => $subPageElement)
            @include($subPageElement->template, [
                    'label' => '',
                    'name' => $name."[<js-counter>][$subPageElement->name]" ?? '',
                    'element' => $subPageElement,
                    'value' => '',
                ])
        @endforeach
        <button class="repeater-delete-el pull-right col-sm-1">X</button>
    </div>
@endpush
