@extends('admin.layout')

@section('page-name', 'Категория')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            @if (isset($category->id))
                <div class="block-header pull-right">
                    <a href="{{ route('categories.show', $category->slug) }}">Перейти на страницу элемента</a>
                </div>
            @endif

            <div class="block-content">
                <form action="{{
                        $category->id
                            ? route('admin.categories.update', $category->id)
                            : route('admin.categories.store')
                            }}" method="post">
                    @csrf
                    @if ( $category->id )
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
                                'value' => $category->name,
                                'required' => 1,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $category->slug,
                            ])

                            @include('admin.partials.gallery', [
                                'label' => 'Логотип',
                                'name' => 'logo',
                                'class' => 'blog-logo',
                                'value' => isset($category->logo) ? [$category->logo] : null,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Описание',
                                'name' => 'description',
                                'value' => $category->description,
                            ])

                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Привязанные сервисы</h3>
                        </div>
                        <div class="card-content">
                            <select class="js-select2 form-control" name="services_id[]" multiple>
                                <?php $compilation_services = $category->services->toArray();
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

                    <button class="btn btn-info">Сохранить</button>
                    <a href="{{ route('admin.categories.index') }}" class="btn btn-link">Отменить</a>
                </form>
            </div>
        </div>
    </div>
    <!-- END CKEditor -->
@endsection
