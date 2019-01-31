@if ( $tariff->is_recommended )
    <div class="package-single featured-plan">
        <div class="featured-badge">Recommended</div>
@else
    <div class="package-single">
@endif
        <div class="package-header">
            <h5>{{ $tariff->name }}</h5>
            <p>{{ $tariff->description }}</p>
            <div class="amount">
                <span>{{ $tariff->price_month }} руб.</span>
                в месяц
            </div>
        </div>
        <div class="package-body">
            <ul>
                <?php
                // Permissions is an array
                $permissions =  array_reverse(str_split($tariff->permissions));
                ?>
                @for ( $i = sizeof($service->features) - 1, $j = 0; $j <= $i; $j++ )
                    <?php
                    $permissions[$j] = $permissions[$j] ?? '0';
                    ?>
                    <li class="{{ $permissions[$j] ? 'yes' : 'no' }}">{{ $service->features[$j] }}</li>
                @endfor
            </ul>
            <a href="" class="btn {{ $tariff->is_on ? 'btn-dark' : 'btn-primary' }} btn-block">
                {{ $tariff->is_on ? 'Подключено' : 'Подключить' }}
            </a>
        </div>
    </div>