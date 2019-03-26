{{-- TODO Update User's data --}}
<div class="author_info">
    <div class="author__img">
        <img src="{{ $blogpost->author->photo }}" alt="Author Image">
    </div>

    <div class="author__info">
        <h4>About {{ $blogpost->author->name }}</h4>
        <p>{{ $blogpost->author->status }}</p>
        <ul>
            <li>
                <a href="{{ $blogpost->author->facebook }}">
                    <span class="fa fa-facebook"></span>
                </a>
            </li>
            <li>
                <a href="{{ $blogpost->author->twitter }}">
                    <span class="fa fa-twitter"></span>
                </a>
            </li>
            <li>
                <a href="{{ $blogpost->author->googleplus }}">
                    <span class="fa fa-google-plus"></span>
                </a>
            </li>
            <li>
                <a href="{{ $blogpost->author->linkedin }}">
                    <span class="fa fa-linkedin"></span>
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- end /.author_info -->