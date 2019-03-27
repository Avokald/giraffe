@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Value</th>
                <th>Date of creation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ( $pageElements as $key => $pageElement )
                <tr>
                    <td>{{ $pageElement->id }}</td>
                    <td>{{ $pageElement->name }}</td>
                    <td>{{ print_r($pageElement->values) }}</td>
                    <td>{{ $pageElement->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.page-elements.edit', $pageElement->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.page-elements.destroy', $pageElement->id) }}"
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

    {{ $pageElements->appends(request()->except('page'))->links('admin.partials.pagination') }}
@endsection