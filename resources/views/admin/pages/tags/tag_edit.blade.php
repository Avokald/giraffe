@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-header">
                <h1>Теги</h1>
            </div>

            <div class="block-content">
                <form action="{{
                        $tag->id
                            ? route('admin.tags.update', $tag->id)
                            : route('admin.tags.store')
                            }}" method="post">
                    @csrf
                    @if ( $tag->id )
                        @method('patch')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Основные</h3>
                        </div>
                        <div class="card-content">

                            @include('admin.partials.text', [
                                'label' => 'Название',
                                'name' => 'name',
                                'value' => $tag->name,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $tag->slug,
                            ])

                        </div>
                    </div>

                    <button class="btn btn--default">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- END CKEditor -->
@endsection
