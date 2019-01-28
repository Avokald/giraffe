<div class="block text-center">
    <nav>
        <ul class="pagination pagination-lg">

            <li>
                <a href="{{ $paginator->previousPageUrl() }}" aria-label="Previous">
                    <span aria-hidden="true"><i class="fa fa-long-arrow-left"></i></span>
                    <span class="sr-only">Previous</span>
                </a>
            </li>

            @foreach ( $elements as $element )
                @if (is_string($element))
                    <li class="disabled"><a>{{ $element }}</a></li>
                @endif

                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active"><a href="#">{{ $page }}</a></li>
                        @else
                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            <li>
                <a href="{{ $paginator->nextPageUrl() }}" aria-label="Next">
                    <span aria-hidden="true"><i class="fa fa-long-arrow-right"></i></span>
                    <span class="sr-only">Next</span>
                </a>
            </li>

        </ul>
    </nav>
</div>