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
                        'label' => 'Name',
                        'name' => 'name',
                        'value' => $page->name,
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
                        @include($element->template, [
                            'label' => ucfirst(str_replace('_', ' ', $element->name)),
                            'name' => "page_elements[$element->name]",
                            'element' => $element,
                            'id' => $element->name.'-id',
                            'class' => $element->name.'-class',
                            'value' => $element->values ?? '',
                        ])
                    @endforeach

                    <?php
//                    $element = $page->getElementByName('team') ?? '';
                    ?>
                    {{--@if ($element)--}}
                        {{--<div class="form-group repeater">--}}
                            {{--<div class="col-sm-12">--}}
                                {{--<div class="form-material">--}}
                                    {{--<div class="repeater-list">--}}
                                        {{--@foreach ($element->values as $key => $values)--}}
                                            {{--<div class="team-single repeater-item">--}}
                                                {{--@foreach ($values as $field_name => $value)--}}
                                                    {{--<input type="text"--}}
                                                           {{--name="page_elements[{{ $element->name }}][{{ $key }}][{{ $field_name }}]"--}}
                                                           {{--value="{{ $value }}">--}}
                                                {{--@endforeach--}}
                                                {{--<button class="repeater-delete-el">X</button>--}}
                                            {{--</div>--}}
                                        {{--@endforeach--}}
                                    {{--</div>--}}
                                    {{--<label>Team</label>--}}
                                    {{--<div class="help-block">This is a help block!</div>--}}
                                    {{--<button class="btn btn--default repeater-add-el"--}}
                                            {{--data-block-type="team-single" data-counter="{{ count($element->values) }}">+</button>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                        {{--@push('hidden')--}}
                            {{--<div class="team-single repeater-item">--}}
                                {{--<input type="text" name="page_elements[{{ $element->name }}][<js-counter>][name]">--}}
                                {{--<input type="text" name="page_elements[{{ $element->name }}][<js-counter>][position]">--}}
                                {{--<input type="text" name="page_elements[{{ $element->name }}][<js-counter>][email]">--}}

                                {{--<button class="repeater-delete-el">X</button>--}}
                            {{--</div>--}}
                        {{--@endpush--}}
                    {{--@endif--}}


                    <button>Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection