@extends('admin.layout')

@section('page-name', 'Блог')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-content">

                <form method="post" action="{{
                    $blogpost->id
                        ? route('admin.blog.update', $blogpost->id)
                        : route('admin.blog.store') }}">
                    @csrf
                    @if ( $blogpost->id )
                        @method('patch')
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h3>Main</h3>
                        </div>

                        <div class="card-content">

                            @include('admin.partials.text', [
                                'label' => 'Название',
                                'name' => 'title',
                                'value' => $blogpost->title,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $blogpost->slug,
                            ])

                            @include('admin.partials.gallery', [
                                'label' => 'Баннер',
                                'name' => 'banner',
                                'class' => 'banner',
                                'value' => isset($blogpost->banner) ? [$blogpost->banner] : null,
                            ])

                            {{--<br><input type="file" name="banner_new">--}}
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Теги</h3>
                        </div>
                        <div class="card-content">
                            <select name="tags[]" class="js-select2 form-control" multiple>
                                <?php $blogpost_tags = $blogpost->tags->toArray();
                                $filtered_tags = array_map(function($el) { return $el['id']; }, $blogpost_tags); ?>
                                @foreach ( $allTags as $tag )
                                    <option value="{{ $tag['id'] }}"
                                            {{ in_array( $tag['id'], $filtered_tags)
                                               ? ' selected' : '' }}>
                                        {{ $tag['name'] }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Короткое описание</h3>
                        </div>
                        <div class="card-content card-content-full">
                            <textarea class="form-control" name="excerpt">{{
                                $blogpost->excerpt
                            }}</textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h3>Контент</h3>
                        </div>
                        <div class="card-content card-content-full">
                            <textarea id="content" name="content">
                                {{ $blogpost->content }}
                            </textarea>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-content">
                            <button>Сохранить</button>
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

    ClassicEditor
        .create(document.querySelector("#content"), {
            extraPlugins: [ MyCustomUploadAdapterPlugin ],
        })

        .catch( error => {
            console.error( error );
        });
@endpush