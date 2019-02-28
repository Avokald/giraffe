@extends('admin.layout')

@section('page-name', 'Тариф')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-content">

                <form method="post" action="{{
                    $tariff->id
                        ? route('admin.tariffs.update', $tariff->id)
                        : route('admin.tariffs.store') }}">
                    @csrf
                    @if ( $tariff->id )
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
                                'value' => $tariff->name,
                            ])

                            @include('admin.partials.select-single', [
                                'label' => 'Сервис',
                                'name' => 'service_id',
                                'allValues' => $allServices,
                                'localValue' => $tariff->service->id ?? '',
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Цена в месяц',
                                'name' => 'price_month',
                                'value' => $tariff->price_month,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Цена в год',
                                'name' => 'price_year',
                                'value' => $tariff->price_year,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Описание',
                                'name' => 'description',
                                'value' => $tariff->description,
                            ])



                            <div class="form-group">
                                <div class="col-xs-12">
                                    @if (isset($tariff->id))
                                        @php
                                        $perm = strrev($tariff->permissions);
                                        @endphp
                                        @foreach ($tariff->service->features as $key => $feature)
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"
                                                           name="perms[]"
                                                            {{ isset($perm[$key]) ? ($perm[$key] ? 'checked' : '') : '' }}
                                                            value="{{ $key }}"
                                                    >
                                                    {{ $feature }}
                                                </label>
                                            </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>

                            <label>Рекомендуется
                                <input type="checkbox"
                                       name="is_recommended"
                                        {{ $tariff->is_recommended ? 'checked' : '' }}>
                            </label>

                            {{--<br><input type="file" name="banner_new">--}}
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <button class="btn btn-info">Сохранить</button>
                            <a href="{{ route('admin.tariffs.index') }}" class="btn btn-link">Отменить</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



@push('script')
    jQuery(function () {
    App.initHelpers(['select2']);
    });
@endpush