@extends('admin.layout')

@section('page-name', 'Подборки')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            @if (isset($compilation->id))
                <div class="block-header pull-right">
                    <a href="{{ route('compilations.show', $compilation->slug) }}">Перейти на страницу элемента</a>
                </div>
            @endif

            <div class="block-content">
                <form method="post" action="{{
                    $compilation->id
                        ? route('admin.compilations.update', $compilation->id)
                        : route('admin.compilations.store') }}">
                    @csrf
                    @if ( $compilation->id )
                        @method('patch')
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3>Основные</h3>
                        </div>

                        <div class="card-content">

                            @include('admin.partials.text', [
                                'label' => 'Название',
                                'name' => 'name',
                                'value' => $compilation->name,
                                'required' => 1,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $compilation->slug,
                            ])

                            @include('admin.partials.gallery', [
                                'label' => 'Логотип',
                                'name' => 'logo',
                                'class' => 'logo',
                                'value' => isset($compilation->logo) ? [$compilation->logo] : null,
                            ])
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Категория</h3>
                        </div>
                        <div class="card-content">
                            <select name="category_id" class="js-select2 form-control">
                                <option value="">Без категории</option>
                                @foreach ( $allCategories as $category )
                                    <option value="{{ $category['id'] }}"
                                    @if ( $compilation->category_id )
                                        {{ ($category['id'] == $compilation->category_id)
                                           ? ' selected' : '' }}
                                            @endif
                                    >
                                        {{ $category['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h3>Сервисы</h3>
                        </div>
                        <div class="card-content">
                            <select class="js-select2 form-control" name="services[]" multiple>
                                <?php $compilation_services = $compilation->services->toArray();
                                $filtered_services = array_map(function($el) { return $el['id']; }, $compilation_services); ?>
                                @foreach ( $allServices as $service )
                                    <option value="{{ $service['id'] }}"
                                            {{ in_array( $service['id'], $filtered_services)
                                               ? ' selected' : '' }}>
                                        {{ $service['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Расценки</h3>
                        </div>

                        <div class="card-content">

                            @include('admin.partials.number', [
                                'name' => 'price_month',
                                'value' => $compilation->price_month,
                                'label' => 'Цена в месяц',
                            ])

                            @include('admin.partials.number', [
                                'name' => 'price_year',
                                'value' => $compilation->price_year,
                                'label' => 'Цена в год',
                            ])

                        </div>
                    </div>


                    <div class="card">
                        <div class="card-header">
                            <h3>Контент</h3>
                        </div>
                        <div class="card-content card-content-full">
                            <textarea id="description" name="description">
                                {{ $compilation->description }}
                            </textarea>
                        </div>
                    </div>
                    <button class="btn btn-info">Сохранить</button>
                    <a href="{{ route('admin.compilations.index') }}" class="btn btn-link">Отменить</a>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('script')
    ClassicEditor
        .create(document.querySelector("#description"), {
            extraPlugins: [ MyCustomUploadAdapterPlugin ],
        })
        .catch( error => {
            console.error( error );
        });
@endpush