@extends('admin.layout')

@section('page-name', 'Поддержка')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            @if (isset($faq->id))
                <div class="block-header pull-right">
                    <a href="{{ route('faqs.show', $faq->slug) }}">Перейти на страницу элемента</a>
                </div>
            @endif

            <div class="block-content">

                <form method="post" action="{{
                    $faq->id
                        ? route('admin.faqs.update', $faq->id)
                        : route('admin.faqs.store') }}">
                    @csrf
                    @if ( $faq->id )
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
                                'value' => $faq->name,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $faq->slug,
                            ])
                        </div>
                    </div>

                    @include('admin.partials.select-single', [
                        'label' => 'Категория поддержки',
                        'name' => 'faq_category_id',
                        'allValues' => $allFaqCategories,
                        'localValue' => $faq->faqCategory->id ?? '',
                    ])

                    <div class="card push-30-t">
                        <div class="card-header">
                            <h3>Контент</h3>
                        </div>
                        <div class="card-content card-content-full">
                            <textarea id="content" name="content">
                                {{ $faq->content }}
                            </textarea>
                        </div>
                    </div>

                    <button class="btn btn-info push-30-t">Сохранить</button>
                    <a href="{{ route('admin.faqs.index') }}" class="btn btn-link push-30-t">Отменить</a>
                </form>
            </div>
        </div>
    </div>
@endsection



@push('script')
    jQuery(function () {
        App.initHelpers(['select2']);
    });

    ClassicEditor
        .create(document.querySelector("#content"), {
            extraPlugins: [ MyCustomUploadAdapterPlugin ],
        })
        .catch( error => {
            console.error( error );
        });
@endpush