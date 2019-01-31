@section('review-reply-form')
    <!-- comment reply -->
    <div class="media depth-2 reply-comment" style="display: none;">
        <div class="media-left">
            <a href="#">
                <img class="media-object" src="images/m2.png" alt="Commentator Avatar">
            </a>
        </div>
        <div class="media-body">
            <form action="#" class="comment-reply-form">
                <textarea class="bla" name="reply-comment" placeholder="Write your comment..."></textarea>
                <button class="btn btn--md btn-primary">Post Comment</button>
            </form>
        </div>
    </div>
    <!-- comment reply -->
@endsection