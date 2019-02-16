<div class="form-group repeater">
    <div class="col-sm-12">
        <div class="form-material">
            <h3>{{ $label }}</h3>
            <br>
            @if ( isset($value) )
                @foreach ( $value as $key => $id )
                    <?php
                    $subelement = \App\PageElement::findOrFail($id);
                    ?>
                    @include('admin.partials.text', [
                        'label' => ucfirst(str_replace('_', ' ', $subelement->name)),
                        'name' => $name."[$subelement->name]",
                        'class' => "$subelement->name-item",
                        'type' => $subelement->pageElementType->name,
                        'id' => $name.$key.$subelement->name,
                        'value' => $subelement->values,
                    ])
                @endforeach
            @endif
            {{--<div class="help-block">This is a help block!</div>--}}
        </div>
    </div>
</div>