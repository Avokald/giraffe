@extends('admin.layout')


@section('main')
    <div class="content content-narrow">
        <form method="post" action="{{
            $tag->id
                ? route('admin.tags.update', $tag->id)
                : route('admin.tags.store') }}">
            @csrf
            @if ( $tag->id )
                @method('patch')
            @endif

            <div class="block">
                <div class="block-header">
                    <h3>Main</h3>
                </div>

                <div class="block-content">
                    <br><input type="text" name="name" value="{{ $tag->name }}">
                    <br><input type="text" name="slug" value="{{ $tag->slug }}">
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