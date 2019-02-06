@extends('admin.layout')


@section('main')
    <div class="content content-narrow">
        <form method="post" action="{{
            $compilation->id
                ? route('admin.compilations.update', $compilation->id)
                : route('admin.compilations.store') }}">
            @csrf
            @if ( $compilation->id )
                @method('patch')
            @endif

            <div class="block">
                <div class="block-header">
                    <h3>Main</h3>
                </div>

                <div class="block-content">
                    <br><input type="text" name="name" value="{{ $compilation->name }}">
                    <br><input type="text" name="slug" value="{{ $compilation->slug }}">
                    {{--<br><input type="file" name="banner_new">--}}
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Pricing</h3>
                </div>

                <div class="block-content">
                    <br>Month: <input type="text" name="price_month" value="{{ $compilation->price_month }}">
                    <br>Year: <input type="text" name="price_year" value="{{ $compilation->price_year }}">
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Services</h3>
                </div>
                <div class="block-content">
                    <select class="js-select2 form-control" name="services[]" multiple>
                        <?php $compilation_services = $compilation->services->toArray();
                        $filtered_services = array_map(function($el) { return $el['id']; }, $compilation_services); ?>
                        @foreach ( $all_services as $service )
                            <option value="{{ $service['id'] }}"
                                    {{ in_array( $service['id'], $filtered_services)
                                       ? ' selected' : '' }}>
                                {{ $service['name'] }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Content Description</h3>
                </div>
                <div class="block-content block-content-full">
                    <textarea id="description" name="description">
                        {{ $compilation->description }}
                    </textarea>
                </div>
            </div>

            <div class="block">
                <div class="block-content">
                    <button>Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection


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
            .create(document.querySelector("#description"))
            .catch( error => {
                console.error( error );
            });
    </script>
@endpush