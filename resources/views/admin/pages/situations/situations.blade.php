@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Date of creation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ( $situations as $key => $situation )
                <tr>
                    <td>{{ $situation->id }}</td>
                    <td>{{ $situation->name }}</td>
                    <td>{{ $situation->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.situations.edit', $situation->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.situations.destroy', $situation->id) }}"
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

    {{ $situations->appends(request()->except('page'))->links('admin.partials.pagination') }}
@endsection