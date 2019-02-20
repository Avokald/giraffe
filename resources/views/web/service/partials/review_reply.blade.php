
<li class="single-thread depth-2">
    <div class="media">
        <div class="media-left">
            <a href="#">{{-- TODO Author image --}}
                <img class="media-object" src="/public/images/m2.png" alt="Commentator Avatar">
            </a>
        </div>
        <div class="media-body">
            <div class="media-heading">
                <h4>TOD{{ 0/* TODO $reply->author->name */ }}</h4>
                <span>{{ $reply->created_at->diffForHumans() }}</span>
            </div>
            <span class="comment-tag">
                <ul class="list-unstyled stars">
                    <li>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </li>
                </ul>
            </span>

            <p>{{ $reply->text  }}</p>
        </div>
    </div>

</li>