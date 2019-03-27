@extends('admin.layout')

@section('page-name', $routeName)

@section('main')
    <div class="content content-narrow">
        <div class="block">
            <div class="block-content">
                <form  action="{{
                        $value->id
                            ? route('admin.' . $routeName . '.update',  $value)
                            : route('admin.' . $routeName . '.store')
                            }}" method="post">
                    @csrf
                    @if ( $value->id )
                        @method('patch')
                    @endif
                    <div class="card push-30 clearfix">
                        <div class="card-content">
                            @foreach($fields as $field)
                                @include('admin.partials.' . $field['template'] , [
                                    'name' => $field['field_name'],
                                    'value' => $value->{$field['field_name']},
                                    'label' => $field['display_value'],
                                    'editable' => $field['editable'],
                                ])
                            @endforeach
                        </div>
                    </div>


                    <button class="btn btn-info">Сохранить</button>
                    <a href="{{ route('admin.' . $routeName . '.index') }}" class="btn btn-link">Отменить</a>
                </form>
            </div>
        </div>
    </div>
@endsection