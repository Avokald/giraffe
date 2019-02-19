@extends('admin.layout')


@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-content">

                <form method="post" action="{{
                    $setting->id
                        ? route('admin.settings.update', $setting->id)
                        : route('admin.settings.store') }}">
                    @csrf
                    @if ( $setting->id )
                        @method('patch')
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3>Main</h3>
                        </div>

                        <div class="card-content">

                            @include('admin.partials.text', [
                                'label' => 'Название',
                                'name' => 'name',
                                'value' => $setting->name,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $setting->slug,
                            ])

                            @include('admin.partials.select-single', [
                                'label' => 'Тип',
                                'name' => 'page_element_type_id',
                                'allValues' => $allPageElementTypes,
                                'localValue' => $setting->pageElementType ?? '',
                            ])
                            <div class="block-content clearfix">
                                @includeIf($setting->template, [
                                    'label' => 'Значение',
                                    'name' => 'value',
                                    'id' => $setting->slug,
                                    'value' => $setting->value,
                                ])
                            </div>

                        </div>
                    </div>

                    <button>Сохранить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
