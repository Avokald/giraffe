@extends('web.app')

@section('content')
    <!--================================
            START 404 AREA
    =================================-->
    <section class="four_o_four_area section--padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3 text-center">
                    <img src="/public/images/404.png" alt="404 page">
                    <div class="not_found">
                        <h2>К сожалению страница не найдена</h2>
                        <a href="/" class="btn btn--md btn-primary">Вернуться На Главную</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
                END 404 AREA
    =================================-->
@endsection