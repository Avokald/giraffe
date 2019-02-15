@extends('admin.layout')


@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-header">
                <h1>Подборки</h1>
            </div>

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
                                'name' => 'name',
                                'value' => $compilation->name,
                                'label' => 'Name',
                            ])

                            @include('admin.partials.text', [
                                'name' => 'slug',
                                'value' => $compilation->slug,
                                'label' => 'Slug',
                            ])

                            @include('admin.partials.gallery', [
                                'label' => 'Logo',
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
                    <button>Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <link rel="stylesheet" href="/public/admin/assets/js/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/public/admin/assets/js/plugins/select2/select2-bootstrap.min.css">
@endpush


@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script src="/public/admin/assets/js/plugins/select2/select2.full.min.js"></script>
@endpush

@push('script')
    jQuery(function () {
        App.initHelpers(['select2']);
    });
    ClassicEditor
        .create(document.querySelector("#description"), {
            extraPlugins: [ MyCustomUploadAdapterPlugin ],
        })
        .catch( error => {
            console.error( error );
        });
@endpush