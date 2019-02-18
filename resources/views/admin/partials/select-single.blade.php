<div class="card">
    <div class="card-header">
        <h3>{{ $label ?? '' }}</h3>
    </div>
    <div class="card-content">
        <select name="{{ $name ?? '' }}" class="js-select2 form-control">
            <option value="">Нет</option>
            @foreach ( $allValues as $item )
                <option value="{{ $item->id }}"
                @if ( $localValue )
                    {{ ($item->id == $localValue->id)
                       ? ' selected' : '' }}
                        @endif
                >
                    {{ $item->name }}
                </option>
            @endforeach
        </select>
    </div>
</div>