@extends('web.app')

@section('content')
    <!--================================
        Start FAQ's
    =================================-->
    <section class="faq-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="faq-box">
                        <div class="faq-head">
                            <h4>{{ $faq->name }}</h4>
                        </div>
                        <div class="faq-content">{!!
                            $faq->content
                         !!}</div>
                    </div>
                    <!-- Ends: .faq-details -->
                </div>
                <!-- Ends: .col-lg-6 -->

                <div class="col-lg-4">
                    <div class="sidebar faq--sidebar">
                        <div class="sidebar-card faq--card">
                            <div class="faq-box">
                                <div class="faq-head">
                                    <h4>Самые популярные</h4>
                                </div>
                                <div class="faq-content">
                                    <ul class="list-unstyled">
                                        @foreach ($popularFaqs as $popularFaq)
                                            <li>
                                                <a href="{{ route('faqs.show', $popularFaq->slug) }}">{{
                                                    $popularFaq->name
                                                }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('faqs.index') }}" class="link-more">Просмотреть все
                                        <span class="icon icon-arrow-right-circle"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Ends: .faq-box -->
                            <div class="faq-box">
                                <div class="faq-head">
                                    <h4>{{ $faq->faqCategory->name }}</h4>
                                </div>
                                <div class="faq-content">
                                    <ul class="list-unstyled">
                                        @foreach ($sameCategoryFaqs as $faq)
                                            <li>
                                                <a href="{{ route('faqs.show', $faq->slug) }}">
                                                    {{ $faq->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('faqs.index') }}" class="link-more">Просмотреть все
                                        <span class="icon icon-arrow-right-circle"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Ends: .faq-box -->
                        </div>
                        <!-- Ends: .sidebar-card -->
                    </div>
                    <!-- Ends: .sidebar -->
                </div>
                <!-- Ends: .col-lg-4 -->
            </div>
        </div>
    </section>
    <!--================================
        Ends FAQ's
    =================================-->
@endsection