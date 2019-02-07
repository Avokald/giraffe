{{-- TODO Update User's data --}}
<div class="author_info">
    <div class="author__img">
        <img src="{{ $blogpost->author->metadata->photo }}" alt="Author Image">
    </div>

    <div class="author__info">
        <h4>About {{ $blogpost->author->metadata->name }}</h4>
        <p>{{ $blogpost->author->metadata->status }}</p>
        <ul>
            <li>
                <a href="{{ $blogpost->author->metadata->facebook }}">
                    <span class="fa fa-facebook"></span>
                </a>
            </li>
            <li>
                <a href="{{ $blogpost->author->metadata->twitter }}">
                    <span class="fa fa-twitter"></span>
                </a>
            </li>
            <li>
                <a href="{{ $blogpost->author->metadata->googleplus }}">
                    <span class="fa fa-google-plus"></span>
                </a>
            </li>
            <li>
                <a href="{{ $blogpost->author->metadata->linkedin }}">
                    <span class="fa fa-linkedin"></span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end /.author_info -->