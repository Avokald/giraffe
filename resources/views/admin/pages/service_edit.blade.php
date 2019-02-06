@extends('admin.layout')

<?php
    $feature_item_format = '
        <div class="feature-item repeater-item">
            <br><input type="text" name="features[]" value="%s">
            <button class="repeater-delete-el">X</button>
        </div>
    ';

?>

@section('main')
    <div class="content content-narrow">
        <form class="form-horizontal" action="{{
                $service->id
                    ? route('admin.services.update', ['service' => $service])
                    : route('admin.services.store')
                    }}" method="post">
            @csrf
            @if ( $service->id )
                @method('patch')
            @endif
            <div class="block">
                <div class="block-header">
                    <h3>Main</h3>
                </div>
                <div class="block-content">
                    <input type="text" name="name" value="{{ $service->name }}">
                    <br><input type="number" name="rating" value="{{ $service->rating }}">
                    <input type="checkbox" name="force_rating" value="{{ $service->force_rating }}">
                    <br><input type="text" name="slug" value="{{ $service->slug }}">
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Category</h3>
                </div>
                <div class="block-content">
                    <select name="category_id" class="js-select2 form-control">
                        <option value="">Без категории</option>
                        @foreach ( $all_categories as $category )
                            <option value="{{ $category['id'] }}"
                                    @if ( $service->category )
                                        {{ ($category['id'] == $service->category->id)
                                           ? ' selected' : '' }}
                                    @endif
                            >
                                {{ $category['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Compilations</h3>
                </div>
                <div class="block-content">
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



            <div class="block">
                <div class="block-header">
                    <h3>Features</h3>
                </div>
                <div class="block-content repeater">
                    <div class="repeater-list">
                        @if ( $service->features )
                            @foreach ( $service->features as $feature )
                                {!! sprintf($feature_item_format, $feature)  !!}
                            @endforeach
                        @endif
                    </div>
                    <button class="btn btn--default repeater-add-el" data-block-type="feature-item">+</button>
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Tariffs</h3>
                </div>
                <div class="block-content">
                    <div class="row">
                        {{--@foreach ( $service->tariffs as $key => $tariff )--}}
                            {{--<div class="col-xs-6 col-sm-3">--}}
                                {{--<input type="text" name="tariffs[{{ $key }}][name]" value="{{ $tariff->name }}">--}}
                                {{--<br><input type="checkbox" name="tariffs[{{ $key }}][recommended]" value="{{ $tariff->is_recommended }}">--}}
                                {{--<br><input type="number" name="tariffs[{{ $key }}][price_month]" value="{{ $tariff->price_month }}">--}}
                                {{--<br><input type="number" name="tariffs[{{ $key }}][price_year]" value="{{ $tariff->price_year }}">--}}
                                {{--<br><textarea name="tariffs[{{ $key }}][description]">{{ $tariff->description }}</textarea>--}}
                            {{--</div>--}}
                        {{--@endforeach--}}
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Short description</h3>
                </div>
                <div class="block-content">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <!-- CKEditor Container -->
                            <textarea name="description_short" style="min-width: 100%;" >{{
                                $service->description_short
                            }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Long Description</h3>
                </div>
                <div class="block-content">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <textarea id="description_long_editor" name="description_long">{{
                                $service->description_long
                            }}</textarea>
                        </div>
                    </div>
                </div>
            </div>


            <div class="block">
                <div class="block-header">
                    <h3>Materials description</h3>
                </div>
                <div class="block-content">
                    <div class="form-group">
                        <div class="col-xs-12">
                            <textarea id="materials_description_editor" name="materials_description">
                                {{ $service->materials_description }}
                            </textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="block-content">
                    <button class="btn btn--default">Save</button>
                </div>
            </div>
        </form>
    </div>
    <!-- END CKEditor -->
@endsection

@push('hidden')
    {!! sprintf($feature_item_format, "") !!}
@endpush

@push('styles')
    <link rel="stylesheet" href="/public/admin/assets/js/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="/public/admin/assets/js/plugins/select2/select2-bootstrap.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script src="/public/admin/assets/js/plugins/select2/select2.full.min.js"></script>

    <script>
        jQuery(function () {
            App.initHelpers(['select2']);
        });

        ClassicEditor
            .create(document.querySelector("#description_long_editor"))
            .catch( error => {
                console.error( error );
            });
        ClassicEditor
            .create(document.querySelector("#materials_description_editor"))
            .catch( error => {
                console.error( error );
            });
    </script>
@endpush