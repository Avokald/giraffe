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
                                    <h4>Most Popular</h4>
                                </div>
                                <div class="faq-content">
                                    <ul class="list-unstyled">
                                        @foreach ($popularFaq as $faq)
                                            <li>
                                                <a href="{{ route('faqs.show', $faq->id) }}">{{ $faq->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    <a href="{{ route('faqs.index') }}" class="link-more">View All Articles
                                        <span class="icon icon-arrow-right-circle"></span>
                                    </a>
                                </div>
                            </div>
                            <!-- Ends: .faq-box -->
                            <div class="faq-box">
                                <div class="faq-head">
                                    <h4>For Author</h4>
                                </div>
                                <div class="faq-content">
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="">How can I update a theme that is live on DigiPro?</a>
                                        </li>
                                        <li>
                                            <a href="">How to write the changelog for theme updates?</a>
                                        </li>
                                        <li>
                                            <a href="">Do you have any guideline on item promotions?</a>
                                        </li>
                                        <li>
                                            <a href="">Why my item has been rejected?</a>
                                        </li>
                                        <li>
                                            <a href="">I’ve submitted an item, how much time will require to be live on?</a>
                                        </li>
                                    </ul>
                                    <a href="" class="link-more">View All Articles
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