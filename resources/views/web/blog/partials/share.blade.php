<div class="share_tags">
    <div class="share">
        <p>{{ $phrases->where('slug', 'share-text')->first()->value ?? '' }}</p>
        <div class="social_share">
            <ul class="social_icons">
                <li>
                    <a href="#">
                        <span class="fa fa-facebook"></span>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/intent/tweet">
                        <span class="fa fa-twitter"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-google-plus"></span>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <span class="fa fa-linkedin"></span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- end social_share -->
    </div>
    <!-- end bog_share_ara  -->
</div>