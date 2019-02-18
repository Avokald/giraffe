@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-header">
                <h1>Категории Поддержки</h1>
            </div>

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
                        <div class="card-content">

                            @include('admin.partials.text', [
                                'label' => 'Название',
                                'name' => 'name',
                                'value' => $faqCategory->name,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $faqCategory->slug,
                            ])

                        </div>
                    </div>

                    <button class="btn btn--default">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- END CKEditor -->
@endsection
