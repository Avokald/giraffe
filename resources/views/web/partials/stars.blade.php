<li class="stars">
    <span class="active"><i class="fa fa-star"></i></span>
    <span class="active"><i class="fa fa-star"></i></span>
    <span class="active"><i class="fa fa-star"></i></span>
    <span class="active"><i class="fa fa-star"></i></span>
    <span class="active"><i class="fa fa-star"></i></span>
</li>
<li class="stars">

    @for ($i = 0, $j = $product->installation_difficulty; $i < 5; $i++ )
        <span {{ $j > $i ? 'class=active' : ''}}><i class="fa fa-wrench"></i></span>
    @endfor
</li>