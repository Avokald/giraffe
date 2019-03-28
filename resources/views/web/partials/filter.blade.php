<!--================================
        START FILTER AREA
    =================================-->
<div class="filter-area product-filter-area">
    {{--@php--}}
        {{--$filter_parameters = [--}}
                {{--'category_id' => request()->category_id,--}}
                {{--'sorting'     => request()->field_name,--}}
                {{--'min'         => request()->price_min ,--}}
                {{--'max'         => request()->price_max,--}}
        {{--];--}}
    {{--@endphp--}}
    <script>
        var filter_parameters = {};
        filter_parameters['category'] = '<?= request()->category_id; ?>';
        filter_parameters['sorting'] = '<?= request()->field_name; ?>';
        filter_parameters['min'] = '<?= request()->price_min; ?>';
        filter_parameters['max'] = '<?= request()->price_max; ?>';
    </script>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="filter-bar barx">
                    <div class="filter__option filter--dropdown">
                        <a href="#" id="drop1" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{ request()->category_id ? $allCategories->find(request()->category_id)->name : 'Категория' }}
                            <span class="icon-arrow-down"></span>
                        </a>
                        <ul class="custom_dropdown custom_drop2 dropdown-menu" aria-labelledby="drop1">
                            @foreach ( $allCategories as $category )
                                <li>
                                    <a href="javascript:" class="filter-services-element"
                                       data-filter-name="category"
                                       data-filter-value="{{ $category->id }}">{{ $category->name }}
                                        <span>{{ isset($type) ? count($category->services) : count($category->compilations) }}</span>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--dropdown">
                        <a href="#" id="drop2" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            @if (request()->field_name == 'view_count')
                                По популярности
                            @elseif (request()->field_name == 'created_at')
                                Новые
                            @else
                                Старые
                            @endif
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
                                   data-filter-value="">Старые</a>
                            </li>
                            {{--<li>--}}
                                {{--<a href="#" class="filter-services-element"--}}
                                   {{--data-filter-name="sorting"--}}
                                   {{--data-filter-value="deals_count">Самые продаваемые</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="#" class="filter-services-element"--}}
                                   {{--data-filter-name="sorting"--}}
                                   {{--data-filter-value="rating">С наивысшим рейтингом</a>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                    <!-- end /.filter__option -->

                    <div class="filter__option filter--dropdown filter--range">
                        <a href="#" id="drop3" class="dropdown-trigger dropdown-toggle" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">
                            {{ (request()->price_min && request()->price_max)
                                ? 'от '.request()->price_min . ' до ' . request()->price_max
                                : 'Все' }}
                            <span class="icon-arrow-down"></span>
                        </a>
                        <div class="custom_dropdown dropdown-menu" aria-labelledby="drop3">
                            <div class="range-slider price-range" data-min="1" data-max="100000" data-valmin="{{ request()->price_min ?? '1'}}" data-valmax="{{ request()->price_max ?? '100000'}}" data-currency="руб"></div>

                            <div class="price-ranges">от
                                <span class="from rounded filter-services-element"
                                      data-filter-name="min" data-filter-value="{{ request()->price_min ?? '1'}}">{{ request()->price_min ?? '1'}}</span>до
                                <span class="to rounded filter-services-element"
                                      data-filter-name="max" data-filter-value="{{ request()->price_max ?? '100000'}}">{{ request()->price_max ?? '100000'}}</span>
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