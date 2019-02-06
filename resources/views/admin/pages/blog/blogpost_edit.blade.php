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
                    <select name="tags[]" multiple>
                        <?php $blogpost_tags = $blogpost->tags->toArray();
                        $filtered_tags = array_map(function($el) { return $el['id']; }, $blogpost_tags); ?>
                        @foreach ( $all_tags as $tag )
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
                    <textarea id="excerpt" name="excerpt">
                        {{ $blogpost->excerpt }}
                    </textarea>
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

            <div class="block">
                <div class="block-content">
                    <button>Submit</button>
                </div>
            </div>
        </form>
    </div>
@endsection



@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/11.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector("#content"))
            .catch( error => {
                console.error( error );
            });

        ClassicEditor
            .create(document.querySelector("#excerpt"))
            .catch( error => {
                console.error( error );
            });
    </script>
@endpush