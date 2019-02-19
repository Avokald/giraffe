<div class="form-group repeater">
    <?php
    if (isset($value[0])) {
        $first_subelement = \App\PageElement::findOrFail($value[0]);
    }
    ?>
    <div class="col-sm-12">
        <div class="form-material">
            <div class="repeater-list">
                 @if ( isset($value) )
                   @foreach ( $value as $key => $id )
                        <?php
                        $subelement = \App\PageElement::findOrFail($id);
                        ?>
                        <div class="{{ $class }} repeater-item col-sm-10">
                            @include($subelement->template, [
                                 'name' => $name."[$key][$subelement->name]",
                                 'value' => $subelement->values,
                                 'label' => '',
                                 'id' => $name.$key.$subelement->name,
                            ])
                            <button class="repeater-delete-el pull-right col-sm-1">X</button>
                        </div>
                    @endforeach
                @endif
            </div>
            <label>{{ $label }}</label>
            {{--<div class="help-block">This is a help block!</div>--}}
            <button class="btn btn--default repeater-add-el"
                    data-block-type="{{ $first_subelement->name }}"
                    data-counter="{{ sizeof($value) }}">+</button>
        </div>
    </div>
</div>

@push('hidden')
    @if ( isset($value) )
        <div class="{{ $first_subelement->name }} repeater-item col-sm-10">
            @include($first_subelement->template, [
                'name' => $name.'[<js-counter>]['.$first_subelement->name.']',
                'value' => $first_subelement->values,
                'label' => '',
                'id' => '<js-uniqid>',
            ])
            <button class="repeater-delete-el pull-right col-sm-1">X</button>
        </div>
    @endif
@endpush
