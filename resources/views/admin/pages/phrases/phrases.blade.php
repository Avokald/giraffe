@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <tr>
                <th>id</th>
                <th>Название</th>
                <th>Значение</th>
                <th>Дата создания</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ( $phrases as $key => $phrase )
                <tr>
                    <td>{{ $phrase->id }}</td>
                    <td>{{ $phrase->slug }}</td>
                    <td>{{ $phrase->value }}</td>
                    <td>{{ $phrase->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.phrases.edit', $phrase->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.phrases.destroy', $phrase->id) }}"
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

    {{ $phrases->appends(request()->except('page'))->links('admin.partials.pagination') }}
@endsection