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
                        'label' => 'Template',
                        'name' => 'template',
                        'value' => $page->template,
                    ])


                    @foreach ( $page->pageElements as $element )
                        @if ( !$element->hidden )
                            @include($element->pageElementType->template, [
                                'label' => ucfirst(str_replace('_', ' ', $element->name)),
                                'name' => "page_elements[$element->name]",
                                'class' => "$element->name-item",
                                'type' => $element->pageElementType->name,
                                'id' => $element->html_id,
                                'element' => $element,
                                'value' => $element->values ?? '',
                            ])
                        @endif
                    @endforeach

                    {{--@include('admin.partials.team_repeater', [--}}
                        {{--'label' => 'Team',--}}
                        {{--'name' => "page_elements[team]",--}}
                        {{--'class' => "team-item",--}}
                        {{--'type' => 'text',--}}
                        {{--'id' => null,--}}
                        {{--'element' => $page->getElementByName("team"),--}}
                    {{--])--}}



                    <button>Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection