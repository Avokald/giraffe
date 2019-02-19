<li class="stars">
    @for ($i = 0, $j = $product->installation_difficulty; $i < 5; $i++ )
        <span {{ $j > $i ? 'class=active' : ''}}><i class="fa fa-wrench"></i></span>
    @endfor
</li>