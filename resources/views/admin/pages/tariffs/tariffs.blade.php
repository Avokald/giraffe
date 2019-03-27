@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <th>id</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Цена за месяц</th>
            <th>Цена за год</th>
            <th>Рекомендовано</th>
            <th>Сервис</th>
            <th>ID Сервиса</th>
            <th>Действия</th>
            </thead>
            <tbody>
            @foreach ( $tariffs as $key => $tariff )
                <tr>
                    <td>{{ $tariff->id }}</td>
                    <td>{{ $tariff->name }}</td>
                    <td>{{ $tariff->description }}</td>
                    <td>{{ $tariff->price_month }}</td>
                    <td>{{ $tariff->price_year }}</td>
                    <td>{{ $tariff->is_recommended ? 'Да' : 'Нет' }}</td>
                    <td>{{ $tariff->service->name }}</td>
                    <td>{{ $tariff->service_id }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.tariffs.edit', $tariff->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.tariffs.destroy', $tariff->id) }}"
                                  method="post" class="hidden" id="form-element-delete-{{ $key }}">
                                @csrf
                                @method('delete')
                            </form>
                            <button class="btn btn-xs btn-default confirm-delete" data-toggle="tooltip"
                                    title="Remove" form="form-element-delete-{{ $key }}">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>


    {{ $tariffs->appends(request()->except('page'))->links('admin.partials.pagination') }}
@endsection