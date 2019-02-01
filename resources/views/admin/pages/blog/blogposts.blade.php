@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <th>id</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Date of creation</th>
            <th>Actions</th>
            </thead>
            <tbody>
            @foreach ( $blogposts as $key => $blogpost )
                <tr>
                    <td>{{ $blogpost->id }}</td>
                    <td>{{ $blogpost->title }}</td>
                    <td>{{ $blogpost->slug }}</td>
                    <td>{{ $blogpost->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.blog.edit', ['id' => $blogpost->id]) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.blog.destroy', ['id' => $blogpost->id]) }}"
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


    {{ $blogposts->links('admin.partials.pagination') }}
@endsection