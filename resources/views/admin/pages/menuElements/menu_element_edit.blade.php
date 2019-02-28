@extends('admin.layout')

@section('page-name', 'Элемент меню')

@section('main')
    <div class="content content-narrow">
        <div class="block">
            <div class="block-content">
                <form method="post" action="{{
                    $menuElement->id
                        ? route('admin.menu-elements.update', $menuElement->id)
                        : route('admin.menu-elements.store') }}">
                    @csrf
                    @if ( $menuElement->id )
                        @method('patch')
                    @endif

                    @include('admin.partials.text', [
                        'label' => 'Название',
                        'name' => 'name',
                        'value' => $menuElement->name ?? '',
                    ])

                    @include('admin.partials.text', [
                        'label' => 'Ссылка',
                        'name' => 'url',
                        'value' => $menuElement->url ?? '',
                    ])

                    @include('admin.partials.select-single', [
                        'label' => 'Надменю',
                        'name' => 'parent_element_id',
                        'allValues' => $allMenuElements,
                        'localValue' => $menuElement->parentElement->id ?? '',
                    ])

                    @include('admin.partials.select-single', [
                        'label' => 'Меню',
                        'name' => 'menu_id',
                        'allValues' => $allMenus,
                        'localValue' => $menuElement->menu->id ?? '',
                    ])

                    <button class="btn btn-info">Сохранить</button>
                    <a href="{{ route('admin.menu-elements.index') }}" class="btn btn-link">Отменить</a>
                </form>
            </div>
        </div>
    </div>
@endsection