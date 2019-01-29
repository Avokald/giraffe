@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <h2 class="content-heading">CKEditor</h2>
        <form class="form-horizontal" action="{{ route('admin.services.update', ['service' => $service]) }}" method="post">
            @csrf
            @method('patch')
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
                    <h3>Features</h3>
                </div>
                <div class="block-content">
                    @foreach ( $service->features as $feature )
                        <br><input type="text" name="features[]" value="{{ $feature }}">
                    @endforeach
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
                            <textarea name="description_short">
                                {{ $service->description_short }}
                            </textarea>
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
                            <textarea id="description_long_editor" name="description_long">
                                {{ $service->description_long }}
                            </textarea>
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
                            <textarea id="materials_description_editor" name="material_description">
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

    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script>
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
@endsection