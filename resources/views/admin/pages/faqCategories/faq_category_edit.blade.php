@extends('admin.layout')

@section('page-name', 'Категории поддержки')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-content">
                <form action="{{
                        $faqCategory->id
                            ? route('admin.faq-categories.update', $faqCategory->id)
                            : route('admin.faq-categories.store')
                            }}" method="post">
                    @csrf
                    @if ( $faqCategory->id )
                        @method('patch')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Основные</h3>
                        </div>
                        <div class="card-content push-30-t">

                            @include('admin.partials.text', [
                                'label' => 'Название',
                                'name' => 'name',
                                'value' => $faqCategory->name,
                                'required' => 1,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $faqCategory->slug,
                            ])

                        </div>
                    </div>

                    <button class="btn btn-info push-30-t">Сохранить</button>
                    <a href="{{ route('admin.faq-categories.index') }}" class="btn btn-link push-30-t">Отменить</a>
                </form>
            </div>
        </div>
    </div>
    <!-- END CKEditor -->
@endsection
