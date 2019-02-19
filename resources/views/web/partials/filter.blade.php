<!--================================
        START FILTER AREA
    =================================-->
<div class="filter-area product-filter-area">
    <script> var filter_parameters = {}; </script>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar barx">
                    <div class="filter__option filter--dropdown">
                        <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Категория
                            <span class="icon-arrow-down"></span>
                        </a>
                        <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                            @foreach ( $allCategories as $category )
                                <li>
                                    <a href="javascript:" class="filter-services-element"
                                       data-filter-name="category"
                                       data-filter-value="{{ $category->id }}">{{ $category->name }}
                                        <span>{{ count($category->services) }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--dropdown">
                        <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">По популярности
                            <span class="icon-arrow-down"></span>
                        </a>
                        <ul class="custom_dropdown dropdown-menu" aria-labelledby="drop2">
                            <li>
                                <a href="#" class="filter-services-element"
                                   data-filter-name="sorting"
                                   data-filter-value="view_count">Популярные</a>
                            </li>
                            <li>
                                <a href="#" class="filter-services-element"
                                   data-filter-name="sorting"
                                   data-filter-value="created_at">Новые</a>
                            </li>
                            <li>
                                <a href="#" class="filter-services-element"
                                   data-filter-name="sorting"
                                   data-filter-value="deals_count">Самые продаваемые</a>
                            </li>
                            <li>
                                <a href="#" class="filter-services-element"
                                   data-filter-name="sorting"
                                   data-filter-value="rating">С наивысшим рейтингом</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--dropdown filter--range">
                        <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">Сначала дорогие
                            <span class="icon-arrow-down"></span>
                        </a>
                        <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                            <div class="range-slider price-range" data-min="1" data-max="100000" data-valmin="1" data-valmax="100000" data-currency="руб"></div>

                            <div class="price-ranges">
                                <span class="from rounded filter-services-element"
                                      data-filter-name="min" data-filter-value="1">1</span>
                                <span class="to rounded filter-services-element"
                                      data-filter-name="max" data-filter-value="100000">100000</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn--md btn-primary filter-services-submit">Применить</button>
                    <!-- end /.filter__option -->
                    <!-- end /.filter__option -->
                </div>
                <!-- end /.filter-bar -->
            </div>
            <!-- end /.col-md-12 -->
        </div>
        <!-- end filter-bar -->
    </div>
</div>
<!-- end /.filter-area -->
<!--================================
    END FILTER AREA
=================================-->