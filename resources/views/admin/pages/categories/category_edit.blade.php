@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <form class="form-horizontal" action="{{
                $category->id
                    ? route('admin.categories.update', ['category' => $category])
                    : route('admin.categories.store')
                    }}" method="post">
            @csrf
            @if ( $category->id )
                @method('patch')
            @endif
            <div class="block">
                <div class="block-header">
                    <h3>Main</h3>
                </div>
                <div class="block-content">
                    <input type="text" name="name" value="{{ $category->name }}">
                    <br><input type="text" name="slug" value="{{ $category->slug }}">
                    {{--<br><input type="file" name="logo"> TODO logo uploading --}}
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
@endsection
