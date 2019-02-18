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
            @foreach ( $faqCategories as $key => $faqCategory )
                <tr>
                    <td>{{ $faqCategory->id }}</td>
                    <td>{{ $faqCategory->name }}</td>
                    <td>{{ $faqCategory->slug }}</td>
                    <td>{{ $faqCategory->created_at }}</td>
                    <td class="text-center">
                        <div class="btn-group">
                            <a href="{{ route('admin.faq-categories.edit', $faqCategory->id) }}"
                               class="btn btn-xs btn-default" data-toggle="tooltip" title="Edit">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <form action="{{ route('admin.faq-categories.destroy', $faqCategory->id) }}"
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


    {{ $faqCategories->links('admin.partials.pagination') }}
@endsection