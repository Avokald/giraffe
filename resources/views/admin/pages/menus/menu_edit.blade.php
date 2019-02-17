@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <div class="block">
            <div class="block-header">
                <h1>Menu</h1>
            </div>

            <div class="block-content">

                <form method="post" action="{{
                    $menu->id
                        ? route('admin.menus.update', $menu->id)
                        : route('admin.menus.store') }}">
                    @csrf
                    @if ( $menu->id )
                        @method('patch')
                    @endif

                    @include('admin.partials.text', [
                        'label' => 'Название',
                        'name' => 'title',
                        'value' => $menu->title ?? '',
                    ])

                    @include('admin.partials.text', [
                        'label' => 'Вид ссылки',
                        'name' => 'slug',
                        'value' => $menu->slug ?? '',
                    ])


                    <button>Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection