@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Лого</th>
                    <th>Название</th>
                    <th>Вид ссылки</th>
                    <th>Рейтинг</th>
                    <th>Сложность установки</th>
                    <th>Дата создания</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $services as $key => $service )
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td><img height="50" src="{{ $service->logo->url ?? '' }}"></td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->slug }}</td>
                        <td>{{ $service->rating }}</td>
                        <td>{{ $service->installation_difficulty }}</td>
                        <td>{{ $service->created_at }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('admin.services.edit', $service->id) }}"
                                   class="btn btn-xs btn-default" data-toggle="tooltip" title="Изменить">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('admin.services.destroy', $service->id) }}"
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

    {{ $services->links('admin.partials.pagination') }}
@endsection