<div class="blog__meta">
    <div class="author">
        <span class="icon-user"></span>
        {{-- TODO User profile image --}}
        <p><a href="{{ route('home', $blogpost->author->metadata->id) }}">{{
            $blogpost->author->metadata->name
        }}</a></p>
    </div>
    <div class="date_time">
        <span class="icon-clock"></span>
        <p>{{ $blogpost->created_at->toFormattedDateString() }}</p>
    </div>
    <div class="comment_view">
        <p class="view">
            <span class="icon-eye"></span>{{ $blogpost->view_count }}</p>
    </div>
</div>