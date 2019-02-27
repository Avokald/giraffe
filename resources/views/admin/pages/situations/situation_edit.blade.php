@extends('admin.layout')

@section('main')
    <div class="content content-narrow">
        <div class="block">

            <div class="block-header">
                <h1>Теги</h1>
            </div>

            <div class="block-content">
                <form action="{{
                        $situation->id
                            ? route('admin.situations.update', $situation->id)
                            : route('admin.situations.store')
                            }}" method="post">
                    @csrf
                    @if ( $situation->id )
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
                                'value' => $situation->name,
                            ])

                            <div class="card">
                                <div class="card-header">
                                    <h3>Подборки</h3>
                                </div>
                                <div class="card-content">
                                    <select name="service_compilations_id[]" class="js-select2 form-control" multiple>
                                        <?php $compilations = $situation->serviceCompilations->toArray();
                                        $filtered_compilations = array_map(function($el) { return $el['id']; }, $compilations); ?>
                                        @foreach ( $allCompilations as $compilation )
                                            <option value="{{ $compilation['id'] }}"
                                                    {{ in_array( $compilation['id'], $filtered_compilations)
                                                       ? ' selected' : '' }}>
                                                {{ $compilation['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>

                    <button class="btn btn--default">Save</button>
                </form>
            </div>
        </div>
    </div>
    <!-- END CKEditor -->
@endsection
