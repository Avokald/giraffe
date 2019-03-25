@extends('admin.layout')

@section('page-name', 'Список блогов')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <th>id</th>
            <th>Баннер</th>
            <th>Название</th>
            <th>Вид ссылки</th>
            <th>Дата создания</th>
            <th>Действия</th>
            </thead>
            <tbody>
            @foreach ( $blogposts as $key => $blogpost )
                <tr>
                    <td>{{ $blogpost->id }}</td>
                    <td><img src="{{ $blogpost->banner->url ?? '' }}" height="50"></td>
                    <td>{{ $blogpost->title }}</td>
                    <td>{{ $blogpost->slug }}</td>
                    <td>{{ $blogpost->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.blog.edit', $blogpost->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Изменить">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.blog.destroy', $blogpost->id) }}"
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


    {{ $blogposts->appends(request()->except('page'))->links('admin.partials.pagination') }}
@endsection