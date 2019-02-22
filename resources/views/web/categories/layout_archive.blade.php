{{-- TODO Language --}}
@extends('web.app')


@section('content')
    <!--================================
    START BREADCRUMB AREA
    =================================-->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 breadcrumb-contents">
                    {{ Breadcrumbs::render('categories') }}
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
    END BREADCRUMB AREA
    =================================-->


    <!--============================================
        START SINGLE PRODUCT DESCRIPTION AREA
    ==============================================-->
    <section class="catalogx">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12">
                    <div class="catalog__search">
                        <form method="get" action="{{ route('services.index') }}">
                            <div class="searc-wrap">
                                <input name="q" type="text" placeholder="Search product here...">
                                <button type="submit" class="search-wrap__btn">
                                    <span class="icon-magnifier"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                    <h3 class="catalogx__title">Возможности</h3>
                    <div class="catalogx__items">
                        <a href="" class="catalogx__item">Все</a>
                        @foreach ( $allCategories as $category )
                            <a href="{{ route('categories.show', $category->slug ) }}" class="catalogx__item">{{ $category->name }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="catalog__search">
                    </div>
                    <h3 class="catalogx__title">Все категории</h3>
                    <div class="catalog__flex">
                        <div class="row">
                            @foreach ( $categories as $category )
                                <div class="col-lg-6 col-md-6">
                                    <a href="{{ route('categories.show', $category->slug) }}" class="catalog__box">
                                        @if ($category->logo)
                                            <div class="catalog__image">
                                                <img src="{{ $category->logo->url }}" alt="{{ $category->logo->alt }}">
                                            </div>
                                        @endif
                                        <div class="catalog__content">
                                            <div class="catalog__name">{{ $category->name }}</div>
                                            <div class="catalog__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis tempora unde dolores suscipit quaerat eum consequatur iste quos quia asperiores minus, nisi sunt dolorem recusandae deserunt error itaque sint enim tempore ad rem! Quidem harum fuga cupiditate quam maiores quod ab aliquid optio reiciendis iste? Beatae dolore et molestiae itaque illo, laudantium esse iusto vel, eos non ex, ab sit quisquam neque! Libero voluptates error totam accusamus aliquam explicabo, provident unde quae aliquid nesciunt, magni quasi placeat, id molestias doloremque autem sunt ducimus. Nisi voluptatem, mollitia porro impedit voluptatum tempore assumenda vel corporis praesentium consectetur quisquam harum architecto deserunt dolore officiis ut. Ipsum aut vel iste maxime mollitia, voluptates dolorum assumenda alias nemo atque animi voluptatibus facere odit aspernatur, in sed quidem quo, fuga harum incidunt consequuntur corrupti ab voluptatum! Quo voluptate porro dicta impedit officiis reprehenderit modi assumenda facere eum perspiciatis quae amet, voluptatem laborum maiores corrupti atque. Dolorem in animi necessitatibus ipsum repudiandae ratione ea assumenda, quis excepturi dolor enim vitae nam repellat quasi maiores sint quam officiis sapiente. Nam corporis labore nostrum eligendi ea mollitia esse obcaecati, quae dolore odio eveniet nemo laborum molestiae blanditiis minus, consequuntur provident ut iusto est soluta perspiciatis laudantium reprehenderit. Corrupti, nemo blanditiis quas dicta, eos debitis voluptatibus, necessitatibus id at molestias eligendi doloribus? Vero accusamus voluptatibus iste molestias repellat, officia quaerat natus iusto omnis? Quia rem error aliquam ullam facilis, eveniet ex illo, consequatur possimus quasi aspernatur inventore porro commodi eius iste dolorem minus maxime, placeat temporibus voluptatibus odit harum dolore nihil! Quisquam debitis odit molestiae consectetur magnam aspernatur, earum cum dolorum placeat impedit repudiandae, corrupti eveniet omnis aut illum optio accusantium officiis laborum sapiente, tempora asperiores doloribus. Fuga illo ad omnis sunt quasi consequatur, ratione repudiandae accusantium possimus vitae eos rem animi vero eum adipisci, corrupti nisi pariatur nam iste culpa dicta assumenda odio. Animi, magnam ullam? Beatae accusamus vitae, facilis at tempora explicabo suscipit odio, ut iste a error obcaecati perspiciatis repudiandae rerum eos corrupti itaque placeat! Eum cumque vitae quis repudiandae, ipsum, doloremque perspiciatis ipsa, aut rem vel optio! Ab commodi sed ipsa, tenetur dicta totam amet reiciendis, corrupti sunt quisquam aliquam quos cupiditate! Totam est veniam doloremque? Blanditiis, eligendi? Exercitationem nobis omnis magnam praesentium similique commodi voluptatum atque quo, rem quidem velit fugit eos reprehenderit sequi. In repudiandae accusantium possimus ullam, nam quae unde odio non molestias sit? Voluptatem adipisci fugiat, labore debitis, sunt quia tenetur itaque quaerat deserunt ab magni obcaecati omnis? Recusandae ab neque accusantium repudiandae inventore ratione quasi corrupti ut, quam quae? Incidunt a unde distinctio accusantium neque impedit quis vitae doloribus dignissimos corrupti maxime nobis fuga architecto obcaecati doloremque, soluta autem dicta praesentium quos facilis dolor placeat ab? Sint exercitationem fuga repellat consectetur porro hic dolores molestiae, repudiandae consequuntur veniam quibusdam assumenda non debitis quia deleniti dignissimos error suscipit rem cumque quod illum ea inventore! Dolore tenetur a, nihil dicta est veritatis facilis et quam deserunt officiis numquam reprehenderit libero praesentium ipsam, eaque omnis eveniet maiores nesciunt. Assumenda alias quam sapiente autem. Cumque possimus laudantium reprehenderit illo mollitia rem libero vel recusandae pariatur fugit, similique distinctio quis tenetur beatae consectetur odit cum nostrum? Pariatur cum sed magnam repellat porro? Repellat delectus magnam dignissimos, iste debitis iusto fugit saepe expedita cupiditate excepturi perspiciatis libero numquam? Dolores consequatur dolor nesciunt quasi, maxime mollitia obcaecati, repellendus incidunt earum maiores consectetur, quos consequuntur ratione amet cumque eaque culpa tenetur voluptatum eligendi ab animi deleniti voluptatibus sint labore? Consequatur, laboriosam. Ab minima deleniti cupiditate mollitia aspernatur? Laborum, error? Excepturi eveniet provident eos maxime minus libero totam! Ratione officiis quam adipisci, molestiae totam qui ipsam animi soluta dolorum accusantium quae vel nihil! Quia laudantium delectus, sunt consequuntur inventore quae aliquam distinctio aut neque provident officiis quibusdam. Reiciendis tempora repellendus necessitatibus voluptatem totam illo, optio maxime illum officiis quo fugit, magni ad! Rerum inventore assumenda rem aliquid repudiandae dolor doloremque non facilis, illo molestiae numquam, voluptatum veritatis ab eligendi odit modi ipsum quibusdam ea exercitationem itaque aliquam recusandae. Minus repellat suscipit, expedita quaerat possimus officiis aperiam tenetur quae. Corporis, quod itaque numquam tempora vitae repellat magni voluptatibus eum, provident tempore facere aut excepturi unde laudantium. Doloribus rerum dolor sit quos cupiditate placeat quod, neque ullam repudiandae unde eligendi dicta, nesciunt similique consectetur laborum voluptas sequi. Quibusdam odio atque, eligendi sunt dolorem illum possimus, architecto optio praesentium ipsa rem error mollitia minus minima? Voluptatem mollitia quasi quis dolorum porro necessitatibus accusantium illo enim laboriosam, accusamus, vitae, incidunt in ut dolore? Soluta non tenetur doloribus dolorem, sapiente beatae unde et provident eum minima, praesentium in magnam. Nam beatae necessitatibus doloribus expedita consequuntur eligendi fugit similique quam laborum illum sequi pariatur ducimus id suscipit, ea labore facere cumque sapiente omnis accusantium neque quisquam iusto asperiores amet. Voluptatem nulla nam libero excepturi quas itaque maxime officia voluptatum, quam maiores minus quia debitis et reprehenderit nisi? Cum a, ea consequuntur rerum expedita consectetur veniam nam modi delectus ex vero nihil soluta aliquid impedit neque harum laborum distinctio necessitatibus unde, nemo, amet sunt! Fuga molestiae fugiat obcaecati distinctio cumque modi perspiciatis, id harum repudiandae dolorum doloribus placeat saepe eos vitae eum eveniet, natus dolores numquam explicabo voluptas ab voluptatem. Adipisci omnis possimus blanditiis vel sunt maiores consequuntur fugiat nihil quis similique, eos modi amet, quos eum cupiditate excepturi iure fugit porro? Quisquam facere dicta pariatur. Quod inventore ipsam ratione adipisci, dolorem nisi dolores eos, non neque, necessitatibus illo earum quo pariatur dolore commodi quae aliquid facilis itaque perspiciatis totam! Fuga accusamus ad, nam commodi nulla perspiciatis dolorem consequuntur, laborum quo sit dignissimos maxime et quasi consectetur ducimus. Dicta deleniti vel dolores hic dolorem repudiandae magnam sunt facilis pariatur natus placeat quaerat accusantium delectus fuga, ipsam ea saepe quae facere ad, unde dolorum vitae nisi maxime? Sunt harum accusantium praesentium amet quaerat voluptatum! Fugit, ipsam mollitia. Tempore harum minus omnis sunt accusamus nam sequi. Iusto molestias ad ipsam maiores repellat praesentium corporis quidem iste, quis commodi quos veritatis, dolorem accusantium ex delectus hic provident a ratione aspernatur saepe deserunt aut facilis! Voluptatem veniam unde eos blanditiis repudiandae!</div>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $categories->links('web.partials.pagination') }}
                </div>
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--===========================================
        END SINGLE PRODUCT DESCRIPTION AREA
    ===============================================-->

@endsection

