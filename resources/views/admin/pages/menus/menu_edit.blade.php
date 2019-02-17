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

                    <table class="table table-bordered">
                        <tr>
                            <th>Элемент</th>
                            <th>Действие</th>
                            <th>Подэлементы</th>
                        </tr>

                        @foreach ($menu->menuElements as $menuElement)
                            <tr>
                                <td><p>{{ $menuElement->title }}</p></td>
                                <td>
                                    <a href="{{ route('admin.menu-elements.edit', $menuElement->id) }}"
                                       class="btn btn-xs btn-default" data-toggle="tooltip" title="Изменить">
                                        <i class="fa fa-pencil"></i>
                                    </a>
                                </td>
                                <td>
                                    <ul>
                                        @foreach ($menuElement->subMenuElements as $subMenuElement)
                                           <li class="clearfix">
                                                <p class="col-sm-9">{{ $subMenuElement->title }}</p>
                                               <a href="{{ route('admin.menu-elements.edit', $menuElement->id) }}"
                                                  class="btn btn-xs btn-default col-sm-3" data-toggle="tooltip" title="Изменить">
                                                   <i class="fa fa-pencil"></i>
                                               </a>
                                           </li>
                                        @endforeach
                                    </ul>
                                </td>
                            </tr>

                        @endforeach
                    </table>


                    <button>Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection