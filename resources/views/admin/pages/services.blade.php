@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Rating</th>
                    <th>Installation difficulty</th>
                    <th>Features</th>
                    <th>Date of creation</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $services as $key => $service )
                    <tr>
                        <td>{{ $service->id }}</td>
                        <td>{{ $service->name }}</td>
                        <td>{{ $service->slug }}</td>
                        <td>{{ $service->rating }}</td>
                        <td>{{ $service->installation_difficulty }}</td>
                        <td>
                            <ul>
                                @foreach ($service->features as $feature)
                                        <li>{{ $feature }}</li>
                                @endforeach
                            </ul>
                        </td>
                        <td>{{ $service->created_at }}</td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('admin.services.edit', ['id' => $service->id]) }}"
                                   class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('admin.services.destroy', ['id' => $service->id]) }}"
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

    {{ $services->links('admin.partials.pagination') }}
@endsection