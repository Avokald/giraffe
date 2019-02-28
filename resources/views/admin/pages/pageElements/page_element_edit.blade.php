@extends('admin.layout')


@section('main')
    <div class="content content-narrow">
        <div class="block">
            <div class="block-header">
                <h1>{{ $pageElement->title }}</h1>
            </div>

            <div class="block-content">
                <form class="form-horizontal" method="post" action="{{
                    $pageElement->id
                        ? route('admin.page-elements.update', $pageElement->id)
                        : route('admin.page-elements.store') }}">
                    @csrf
                    @if ( $pageElement->id )
                        @method('patch')
                    @endif
                    @include('admin.partials.text', [
                        'label' => 'Title',
                        'name' => 'name',
                        'value' => $pageElement->name ?? '',
                    ])

                    @include('admin.partials.select-single', [
                        'label' => 'Type',
                        'name' => 'page_element_type_id',
                        'allValues' => $allPageElementTypes,
                        'localValue' => $pageElement->pageElementType->id ?? '',
                    ])

                    @include('admin.partials.select-single', [
                        'label' => 'Page',
                        'name' => 'page_id',
                        'allValues' => $allPages,
                        'localValue' => $pageElement->page->id ?? '',
                    ])

                    @include('admin.partials.select-single', [
                        'label' => 'Parent element',
                        'name' => 'parent_element_id',
                        'allValues' => $allPageElements,
                        'localValue' => $pageElement->parentElement->id ?? '',
                    ])



                    <button class="btn btn-info">Сохранить</button>
                    <a href="{{ route('admin.page-elements.index') }}" class="btn btn-link">Отменить</a>
                </form>
            </div>
        </div>
    </div>
@endsection