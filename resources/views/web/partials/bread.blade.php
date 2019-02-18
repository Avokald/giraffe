{{-- TODO insert data --}}
{{-- TODO Refactor so the whole breadcrubms class will fit in this view.
    The view should be extendible so that I can place an image in services
--}}
@if (count($breadcrumbs))
    <?php // TODO wtf, how does this work
    $lastBread = last(last($breadcrumbs));
    ?>
    @if (!preg_match('/(services\/.+)|(\/about$)/', last($lastBread)))
        <h2 class="page-title">{{ head($lastBread) }}</h2>
    @endif
    <div class="breadcrumb">
        <ul>
            @foreach ($breadcrumbs as $breadcrumb)
                @if ($breadcrumb->url && !$loop->last)
                    <li>
                        <a href="{{ $breadcrumb->url }}">{{ $breadcrumb->title }}</a>
                    </li>
                @else
                    <li class="active">
                        <a href="">{{ $breadcrumb->title }}</a>
                    </li>
                @endif
            @endforeach
        </ul>
    </div>
@endif