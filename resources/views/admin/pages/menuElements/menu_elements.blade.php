@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Ссылка</th>
                <td>Меню</td>
                <th>Надменю</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ( $menuElements as $key => $menuElement )
                <tr>
                    <td>{{ $menuElement->id }}</td>
                    <td>{{ $menuElement->title }}</td>
                    <td>{{ $menuElement->url }}</td>
                    <td>{{ $menuElement->menu->title ?? '' }}</td>
                    <td>{{ $menuElement->parentElement->title ?? '' }}</td>
                    <td>{{ $menuElement->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.menu-elements.edit', $menuElement->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Изменить">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.menu-elements.destroy', $menuElement->id) }}"
                                  method="post" class="hidden" id="form-element-delete-{{ $key }}">
                                @csrf
                                @method('delete')
                            </form>
                            <button class="btn btn-xs btn-default confirm-delete" data-toggle="tooltip"
                                    title="Удалить" form="form-element-delete-{{ $key }}">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{ $menuElements->links('admin.partials.pagination') }}
@endsection