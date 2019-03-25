@extends('admin.layout')

@section('page-name', 'Список категорий')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter table-responsive">
            <thead>
            <th>id</th>
            <th>Логотип</th>
            <th>Название</th>
            <th>Вид ссылки</th>
            <th>Описание</th>
            <th>Дата создания</th>
            <th>Действия</th>
            </thead>
            <tbody>
            @foreach ( $categories as $key => $category )
                <tr>
                    <td><p>{{ $category->id }}</p></td>
                    <td><img src="{{ $category->logo->url ?? '' }}" height="50"></td>
                    <td><p>{{ $category->name }}</p></td>
                    <td><p>{{ $category->slug }}</p></td>
                    <td><p>{{ $category->description }}</p></td>
                    <td><p>{{ $category->created_at }}</p></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.categories.edit', $category->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Изменить">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.categories.destroy', $category->id) }}"
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


    {{ $categories->appends(request()->except('page'))->links('admin.partials.pagination') }}
@endsection