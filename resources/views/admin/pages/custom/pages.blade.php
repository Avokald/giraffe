@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <tr>
                <th>id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Template</th>
                <th>Date of creation</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ( $pages as $key => $page )
                <tr>
                    <td>{{ $page->id }}</td>
                    <td>{{ $page->name }}</td>
                    <td>{{ $page->slug }}</td>
                    <td>{{ $page->template }}</td>
                    <td>{{ $page->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.pages.edit', $page->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.pages.destroy', $page->id) }}"
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

    {{ $pages->links('admin.partials.pagination') }}
@endsection