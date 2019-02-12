@extends('admin.layout')


@section('main')
    <div class="content content-narrow">
        <form method="post" action="{{
            $blogpost->id
                ? route('admin.blog.update', $blogpost->id)
                : route('admin.blog.store') }}">
            @csrf
            @if ( $blogpost->id )
                @method('patch')
            @endif

            <div class="block">
                <div class="block-header">
                    <h3>Main</h3>
                </div>

                <div class="block-content">
                    <br><input type="text" name="title" value="{{ $blogpost->title }}">
                    <br><input type="text" name="slug" value="{{ $blogpost->slug }}">
                    {{--<br><input type="file" name="banner_new">--}}
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Tags</h3>
                </div>
                <div class="block-content">
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

            <div class="block">
                <div class="block-header">
                    <h3>Content Excerpt</h3>
                </div>
                <div class="block-content block-content-full">
                    <textarea class="form-control" name="excerpt">{{
                        $blogpost->excerpt
                    }}</textarea>
                </div>
            </div>

            <div class="block">
                <div class="block-header">
                    <h3>Content</h3>
                </div>
                <div class="block-content block-content-full">
                    <textarea id="content" name="content">
                        {{ $blogpost->content }}
                    </textarea>
                </div>
            </div>

            @include('admin.partials.image', [
                'label' => 'Banner image',
                'name' => 'banner',
                'value' => $blogpost->banner->id ?? '',
            ])

            <div class="block">
                <div class="block-content">
                    <button>Submit</button>
                </div>
            </div>
        </form>
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