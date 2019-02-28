<div class="card col-xs-12 clearfix push-20">
    <div class="card-header">
        <h3>{{ $label ?? '' }}</h3>
    </div>
    <div class="card-content">
        <select name="{{ $name ?? '' }}" class="js-select2 form-control">
            <option value="">Нет</option>
            @foreach ( $allValues as $item )
                <option value="{{ $item->id }}"
                @if ( $localValue )
                    {{ ($item->id == $localValue)
                       ? ' selected' : '' }}
                        @endif
                >
                    {{ $item->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>