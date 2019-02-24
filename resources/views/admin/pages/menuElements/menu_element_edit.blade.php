@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <div class="block">
            <div class="block-header">
                <h1>Menu Element</h1>
            </div>

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
                        'localValue' => $menuElement->parentElement,
                    ])

                    @include('admin.partials.select-single', [
                        'label' => 'Меню',
                        'name' => 'menu_id',
                        'allValues' => $allMenus,
                        'localValue' => $menuElement->menu,
                    ])

                    <button>Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection