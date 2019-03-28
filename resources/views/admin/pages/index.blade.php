@extends('admin.layout')

@section('main')
    <div class="table-responsive">
        <table class="table table-striped table-vcenter">
            <thead>
            <tr>
                @if (isset($fields))
                    @foreach($fields as $key => $value)
                        @if ($value['show_in_table'])
                            <th>{{ $value['display_value'] }}</th>
                        @endif
                    @endforeach
                    <th>Действия</th>
                @endif
            </tr>
            </thead>
            <tbody>
            @if (isset($values) && isset($fields))
                @foreach ($values as $value_key => $value_item)
                    <tr>
                        @foreach ($fields as $field_key => $field_value)
                            @if ($field_value['show_in_table'])
                                <td>{{ $value_item->{$field_value['field_name']} }}</td>
                            @endif
                        @endforeach
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="{{ route('admin.' . $routeName . '.edit', $value_item->id) }}"
                                   class="btn btn-xs btn-default" data-toggle="tooltip" title="Изменить">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                <form action="{{ route('admin.' . $routeName . '.destroy', $value_item->id) }}"
                                      method="post" class="hidden" id="form-element-delete-{{ $value_key }}">
                                    @csrf
                                    @method('delete')
                                </form>
                                <button class="btn btn-xs btn-default confirm-delete" data-toggle="tooltip"
                                        title="Удалить" form="form-element-delete-{{ $value_key }}">
                                    <i class="fa fa-times"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
             @endif
            </tbody>
        </table>
    </div>

    {{ $values->appends(request()->except('page'))->links('admin.partials.pagination') }}
@endsection