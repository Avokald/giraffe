@extends('admin.layout')


@section('main')
    <div class="content content-narrow">
        <div class="block">

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
                            <h3>Main</h3>
                        </div>

                        <div class="card-content">

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

                    <div class="card">
                        <div class="card-header">
                            <h3>Контент</h3>
                        </div>
                        <div class="card-content card-content-full">
                            <textarea id="content" name="content">
                                {{ $faq->content }}
                            </textarea>
                        </div>
                    </div>

                    <button>Сохранить</button>
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