{{-- TODO insert data --}}
{{-- TODO Refactor so the whole breadcrubms class will fit in this view.
    The view should be extendible so that I can place an image in services
--}}
{{--{{ Breadcrumbs::render('blogpost') }}--}}
@if (count($breadcrumbs))
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