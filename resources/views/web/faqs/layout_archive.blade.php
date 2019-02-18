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
                    {{ Breadcrumbs::render('faqs') }}
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


    <section class="faq-area">
        <div class="container">
            <div class="row">
                @if ($faqCategories)
                    @foreach ($faqCategories as $faqCategory)
                        <div class="col-lg-6">
                            <div class="faq-box">
                                <div class="faq-head">
                                    <h4>{{ $faqCategory->name }}({{ count($faqCategory->faqs) }}) </h4>
                                </div>
                                <div class="faq-content">
                                    <ul class="list-unstyled">
                                        @foreach ($faqCategory->faqs as $faq)
                                            <li>
                                                <a href={{ route('faqs.show', $faq->slug) }}>{{ $faq->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    {{--<a href="" class="link-more">Смотреть все статьи<span class="icon icon-arrow-right-circle"></span>--}}
                                    {{--</a>--}}
                                </div>
                            </div>
                        </div>
                        <!-- Ends: .col-lg-6 -->
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <!--================================
        Ends FAQ's
    =================================-->
@endsection


