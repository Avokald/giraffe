@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <th>id</th>
            <th>Название</th>
            <th>Вид ссылки</th>
            <th>Дата создания</th>
            <th>Действия</th>
            </thead>
            <tbody>
            @foreach ( $faqs as $key => $faq )
                <tr>
                    <td>{{ $faq->id }}</td>
                    <td>{{ $faq->name }}</td>
                    <td>{{ $faq->slug }}</td>
                    <td>{{ $faq->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.faqs.edit', $faq->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.faqs.destroy', $faq->id) }}"
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


    {{ $faqs->links('admin.partials.pagination') }}
@endsection