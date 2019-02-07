@extends('admin.layout')


@section('main')
    <div class="content content-narrow">
        <div class="block">
            <div class="block-header">
                <h1>{{ $page->title }}</h1>
            </div>

            <div class="block-content">
                <form class="form-horizontal" method="post" action="{{
                    $page->id
                        ? route('admin.pages.update', $page->id)
                        : route('admin.pages.store') }}">
                        @csrf
                        @if ( $page->id )
                            @method('patch')
                        @endif
                        @include('admin.partials.text', [
                            'label' => 'Title',
                            'name' => 'title',
                            'value' => $page->title,
                        ])

                        @include('admin.partials.text', [
                            'label' => 'Slug',
                            'name' => 'slug',
                            'value' => $page->slug,
                        ])

                        @include('admin.partials.editor', [
                            'label' => 'Content',
                            'name'  => 'content',
                            'value' => $page->content,
                            'id'    => 'content',
                        ])

                        @include('admin.partials.text', [
                            'label' => 'Section title',
                            'name' => 'page_elements[section_title]',
                            'value' => $page->pageElements()->where('name', '=', 'section_title')->first(),
                        ])

                        {{--@include('admin.partials.map', [--}}
                            {{--'label' => 'Map',--}}
                            {{--'name' => 'map',--}}
                            {{--'value' => [--}}
                                {{--'lng' => 55,--}}
                                {{--'lat' => 55,--}}
                            {{--] ,//$page->map,--}}
                            {{--'id' => 'loc',--}}
                        {{--])--}}

                    <button>Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection