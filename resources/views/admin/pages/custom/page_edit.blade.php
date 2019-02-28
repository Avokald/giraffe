@extends('admin.layout')

@section('page-name', 'Страница')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            @if (isset($page->id))
                <div class="block-header pull-right">
                    <a href="/{{ ($page->slug != 'frontpage') ? $page->slug : '' }}">Перейти на страницу элемента</a>
                </div>
            @endif

            <div class="block-content">
                <form class="form-horizontal" method="post" action="{{
                    $page->id
                        ? route('admin.pages.update', $page->id)
                        : route('admin.pages.store') }}">
                    @csrf
                    @if ( $page->id )
                        @method('patch')
                    @endif
                    @include('admin.partials.text', [
                        'label' => 'Название',
                        'name' => 'name',
                        'value' => $page->name,
                        'required' => 1,
                    ])

                    @include('admin.partials.text', [
                        'label' => 'Вид ссылки',
                        'name' => 'slug',
                        'value' => $page->slug,
                    ])

                    @include('admin.partials.editor', [
                        'label' => 'Контент',
                        'name'  => 'content',
                        'value' => $page->content,
                        'id'    => 'content',
                    ])

                    @include('admin.partials.text', [
                        'label' => 'Шаблон',
                        'name' => 'template',
                        'value' => $page->template,
                    ])

                    @foreach ( $page->pageElements as $element )
                        @includeIf($element->template, [
                            'label' => ucfirst(str_replace('_', ' ', $element->name)),
                            'name' => "page_elements[$element->name]",
                            'element' => $element,
                            'id' => $element->name.'-id',
                            'class' => $element->name.'-class',
                            'value' => $element->values ?? '',
                        ])
                    @endforeach

                    <button class="btn btn-info">Сохранить</button>
                    <a href="{{ route('admin.pages.index') }}" class="btn btn-link">Отменить</a>
                </form>
            </div>
        </div>
    </div>
@endsection