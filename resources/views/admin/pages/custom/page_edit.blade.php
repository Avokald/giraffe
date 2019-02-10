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


                    @include('admin.partials.repeater', [
                        'label' => 'Addresses',
                        'name' => 'page_elements[addresses][]',
                        'class' => 'addresses-item',
                        'type' => 'text',
                        'element' => $page->getElementByName("addresses"),
                    ])

                    @include('admin.partials.repeater', [
                        'label' => 'Phone numbers',
                        'name' => 'page_elements[phone_numbers][]',
                        'class' => 'phone-number-item',
                        'type' => 'text',
                        'element' => $page->getElementByName('phone_numbers'),
                    ])

                    @include('admin.partials.repeater', [
                        'label' => 'Email addresses',
                        'name' => 'page_elements[email_addresses][]',
                        'class' => 'email-addresses-item',
                        'type' => 'text',
                        'element' => $page->getElementByName('email_addresses'),
                    ])

                    @include('admin.partials.map', [
                            'label' => 'Map',
                            'name' => 'page_elements[map]',
                            'element' => $page->getElementByName("map"),
                            'id' => 'loc',
                    ])

                    <button>Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection