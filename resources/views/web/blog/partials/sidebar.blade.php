<div class="col-lg-4 col-md-12">
    <aside class="sidebar sidebar--blog">
        <div class="sidebar-card card--search card--blog_sidebar">
            <div class="card-title">
                <h4>Подпишитесь на рассылку</h4>
            </div>
            <!-- end /.card-title -->

            <div class="card_content">
                <form action="#">
                    <div class="searc-wrap">
                        <input type="text" placeholder="Email">
                    </div>
                    <button type="submit" class="btn btn-md btn-primary">
                        Подписаться
                    </button>
                </form>
            </div>
            <!-- end /.card_content -->
        </div>
        <!-- end /.sidebar-card -->

        <div class="sidebar-card card--blog_sidebar card--tags">
            <div class="card-title">
                <h4>Теги</h4>
            </div>

            <ul class="tags">
                @foreach ( $tags as $tag )
                    <li>
                        <a href="{{ route('home', $tag->slug ) }}">{{ $tag->name }}</a>
                    </li>
                @endforeach
            </ul>
            <!-- end /.tags -->
        </div>

        <div class="sidebar-card sidebar--post card--blog_sidebar">
            <div class="card-title">
                <!-- Nav tabs -->
                <ul class="post-tab nav" role="tablist">
                    <li>
                        <a href="#popular" id="popular-tab" class="active" aria-controls="popular"
                           role="tab" data-toggle="tab" aria-selected="true">Популярные посты</a>
                    </li>
                    <li>
                        <a href="#latest" class="" id="latest-tab" aria-controls="latest" role="tab"
                           data-toggle="tab" aria-selected="false">Последние публикации</a>
                    </li>
                </ul>
            </div>
            <!-- end /.card-title -->

            <div class="card_content">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active fade show" id="popular"
                         aria-labelledby="popular-tab">
                        <ul class="post-list">
                            @foreach ( $popularBlogposts as $blogpost )
                                <li>
                                    @if ($blogpost->banner)
                                        <div class="thumbnail_img">
                                            <span><img src="{{$blogpost->banner->url }}" alt="blog thumbnail"></span>
                                        </div>
                                    @endif
                                    <div class="title_area">
                                        <a href="{{ route('blogpost.show', $blogpost->slug) }}">
                                            <h6>{{ $blogpost->title }}</h6>
                                        </a>
                                        <div class="date_time">
                                            <span class="icon-clock"></span>
                                            <p>{{ $blogpost->created_at->toFormattedDateString() }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- end /.post-list -->
                    </div>
                    <!-- end /.tabpanel -->

                    <div role="tabpanel" class="tab-pane fade" id="latest" aria-labelledby="latest-tab">
                        <ul class="post-list">
                            @foreach ( $latestBlogposts as $blogpost )
                                <li>
                                    @if ($blogpost->banner)
                                        <div class="thumbnail_img">
                                            <span><img src="{{$blogpost->banner->url }}" alt="blog thumbnail"></span>
                                        </div>
                                    @endif
                                    <div class="title_area">
                                        <a href="{{ route('blogpost.show', $blogpost->slug) }}">
                                            <h6>{{ $blogpost->title }}</h6>
                                        </a>
                                        <div class="date_time">
                                            <span class="icon-clock"></span>
                                            <p>{{ $blogpost->created_at->toFormattedDateString() }}</p>
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                        <!-- end /.post-list -->
                    </div>
                    <!-- end /.tabpanel -->
                </div>
                <!-- end /.tab-content -->
            </div>
            <!-- end /.card_content -->
        </div>
        <!-- end /.sidebar-card -->
    </aside>
    <!-- end /.aside -->
</div>
<!-- end /.col-md-4 -->