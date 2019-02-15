@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter table-responsive">
            <thead>
            <th>id</th>
            <th>Баннер</th>
            <th>Название</th>
            <th>Вид ссылки</th>
            <th>Цена в мес.</th>
            <th>Цена в год</th>
            <th>Дата создания</th>
            <th>Действия</th>
            </thead>
            <tbody>
            @foreach ( $compilations as $key => $compilation )
                <tr>
                    <td><p>{{ $compilation->id }}</p></td>
                    <td><img src="{{ $compilation->logo->url ?? '' }}" height="50"></td>
                    <td><p>{{ $compilation->name }}</p></td>
                    <td><p>{{ $compilation->slug }}</p></td>
                    <td><p>{{ $compilation->price_month }}</p></td>
                    <td><p>{{ $compilation->price_year }}</p></td>
                    <td><p>{{ $compilation->created_at }}</p></td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.compilations.edit', $compilation->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.compilations.destroy', $compilation->id) }}"
                                  method="post" class="hidden" id="form-element-delete-{{ $key }}">
                                @csrf
                                @method('delete')
                            </form>
                            <button class="btn btn-xs btn-default confirm-delete" type="button" data-toggle="tooltip"
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


    {{ $compilations->links('admin.partials.pagination') }}
@endsection