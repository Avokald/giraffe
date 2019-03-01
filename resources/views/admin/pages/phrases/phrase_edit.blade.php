@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-header">
                <h1>Фразы</h1>
            </div>

            <div class="block-content">
                <form action="{{
                        $phrase->id
                            ? route('admin.phrases.update', $phrase->id)
                            : route('admin.phrases.store')
                            }}" method="post">
                    @csrf
                    @if ( $phrase->id )
                        @method('patch')
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <h3>Основные</h3>
                        </div>
                        <div class="card-content push-30-t">

                            @include('admin.partials.text', [
                                'label' => 'Вид ссылки',
                                'name' => 'slug',
                                'value' => $phrase->slug,
                            ])

                            @include('admin.partials.text', [
                                'label' => 'Значение',
                                'name' => 'value',
                                'value' => $phrase->value,
                            ])

                        </div>
                    </div>

                    <button class="btn btn-info">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- END CKEditor -->
@endsection
