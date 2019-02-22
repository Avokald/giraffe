@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <div class="block">
            <div class="block-header">
                Service
            </div>
            <div class="block-content">
                <form  action="{{
                        $service->id
                            ? route('admin.services.update', ['service' => $service])
                            : route('admin.services.store')
                            }}" method="post">
                    @csrf
                    @if ( $service->id )
                        @method('patch')
                    @endif
                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Main</h3>
                        </div>
                        <div class="card-content">

                            @include('admin.partials.text', [
                                'name' => 'name',
                                'value' => $service->name,
                                'label' => 'Name',
                            ])

                            @include('admin.partials.text', [
                                'name' => 'slug',
                                'value' => $service->slug,
                                'label' => 'Slug',
                            ])

                            @include('admin.partials.number', [
                                'name' => 'rating',
                                'value' => $service->rating,
                                'label' => 'Rating',
                            ])

                            {{-- TODO Remove force rating --}}
                            {{--<input type="checkbox" name="force_rating" value="{{ $service->force_rating }}"> --}}
                        </div>
                    </div>

                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Изображения сервиса</h3>
                        </div>
                        <div class="card-content">

                            @include('admin.partials.gallery', [
                                'label' => 'Logo',
                                'name' => 'logo',
                                'class' => 'logo',
                                'value' => isset($service->logo) ? [$service->logo] : null,
                            ])

                            @include('admin.partials.gallery', [
                                'label' => 'Banner image',
                                'name' => 'banner',
                                'class' => 'banner',
                                'value' => isset($service->banner) ? [$service->banner] : null,
                            ])

                            @include('admin.partials.gallery', [
                                'label' => 'Screenshots',
                                'name' => 'screenshots[]',
                                'class' => 'screenshot',
                                'value' => $service->screenshots,
                            ])
                        </div>
                    </div>

                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Category</h3>
                        </div>
                        <div class="card-content">
                            <div class="row">
                                <div class="col-12">

                                    <div class="form-group col-sm-12">
                                        <div class="form-material push-20-t">
                                            <select name="category_id" class="js-select2 form-control">
                                                <option value="">Без категории</option>
                                                @foreach ( $all_categories as $category )
                                                    <option value="{{ $category->id }}"
                                                            @if ( $service->category )
                                                                {{ ($category->id == $service->category->id)
                                                                   ? ' selected' : '' }}
                                                            @endif
                                                    >
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Compilations</h3>
                        </div>
                        <div class="card-content">
                            <select name="compilations[]" class="js-select2 form-control" multiple>
                                <?php
                                $service_compilations = $service->compilations->toArray();
                                $filtered_service_compilations = array_map(function($el) { return $el['id']; }, $service_compilations); ?>
                                @foreach ( $all_compilations as $compilation )
                                    <option value="{{ $compilation['id'] }}"
                                            {{ in_array($compilation['id'], $filtered_service_compilations)
                                               ? ' selected' : '' }}>
                                        {{ $compilation['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>PDF</h3>
                        </div>
                        <div class="card-content">
                            @include('admin.partials.repeater', [
                                 'label' => '',
                                 'name' => 'pdfs[]',
                                 'template' => 'admin.partials.file',
                                 'class' => 'pdfs-item',
                                 'value' => $service->pdfs,
                             ])
                        </div>
                    </div>



                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Документы</h3>
                        </div>
                        <div class="card-content">
                            @include('admin.partials.repeater', [
                                 'label' => '',
                                 'name' => 'documents[]',
                                 'template' => 'admin.partials.file',
                                 'class' => 'documents-item',
                                 'value' => $service->documents,
                             ])
                        </div>
                    </div>

                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Презентации</h3>
                        </div>
                        <div class="card-content">
                            @include('admin.partials.repeater', [
                                 'label' => '',
                                 'name' => 'presentations[]',
                                 'template' => 'admin.partials.file',
                                 'class' => 'presentations-item',
                                 'value' => $service->presentations,
                             ])
                        </div>
                    </div>


                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Фичи</h3>
                        </div>
                        <div class="card-content">
                            @include('admin.partials.repeater', [
                                 'label' => '',
                                 'name' => 'features[]',
                                 'template' => 'admin.partials.text',
                                 'class' => 'features-item',
                                 'value' => $service->features,
                             ])
                        </div>
                    </div>

                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Короткое описание</h3>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <textarea name="description_short" style="min-width: 100%;" >{{
                                        $service->description_short
                                    }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Длинное описание</h3>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <textarea id="description_long_editor" name="description_long">{{
                                        $service->description_long
                                    }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Описание материалов</h3>
                        </div>
                        <div class="card-content">
                            <div class="form-group">
                                <div class="col-xs-12">
                                    <textarea id="materials_description_editor" name="materials_description">{{
                                        $service->materials_description
                                        }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>

                    @php
                    $relatedServices = $service->relatedServicesTo->toArray();
                    @endphp
                    <div class="card push-30 clearfix">
                        <div class="card-header">
                            <h3>Связанные сервисы</h3>
                        </div>
                        <div class="card-content">
                            <select name="related_services[]" class="js-select2 form-control" multiple>
                                @php
                                $filteredRelatedServices = array_map(function($el) { return $el['id']; }, $relatedServices);
                                @endphp
                                @foreach ($allServicesExceptCurrent as $singleService)
                                    <option value="{{ $singleService->id }}"
                                            {{ in_array($singleService->id, $filteredRelatedServices)
                                               ? ' selected' : '' }}>
                                        {{ $singleService->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <button class="btn btn-info">Сохранить</button>
                </form>
            </div>
        </div>
    </div>
    <!-- END CKEditor -->
@endsection

@push('scripts')
    <script>
        jQuery(function () {
            App.initHelpers(['select2']);
        });
    </script>
@endpush

@push('script')
    ClassicEditor
        .create(document.querySelector("#description_long_editor"), {
            extraPlugins: [ MyCustomUploadAdapterPlugin ],
        })
        .catch( error => {
            console.error( error );
        });
    ClassicEditor
        .create(document.querySelector("#materials_description_editor"), {
            extraPlugins: [ MyCustomUploadAdapterPlugin ],
        })
        .catch( error => {
            console.error( error );
        });
@endpush