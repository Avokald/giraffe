<div class="media">
    <div class="media-left">
        <a href="#">
            <img class="media-object" src="/public/images/m1.png" alt="Commentator Avatar">
        </a>
    </div>
    <div class="media-body">
        <div>
            <div class="media-heading">
                <a href="author.html">
                    <h4>Themexylum</h4>
                </a>
                <span>{{ $review->created_at->diffForHumans() }}</span>
            </div>
            <span class="comment-tag buyer">Purchased</span>
            <a href="#" class="reply-link">Ответить</a>
        </div>
        <p>{{ $review->text }}</p>
    </div>
</div>