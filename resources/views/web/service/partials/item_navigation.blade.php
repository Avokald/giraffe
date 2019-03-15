@section('item-navigation')
    <div class="item-navigation">
        <ul class="nav nav-tabs" role="tablist">
            <li>
                <a href="#tazz1" class="active" id="tab1">
                    <span class="icon icon-docs"></span> {{ $phrases->where('slug', 'description')->first()->value ?? '' }}</a>
            </li>
            <li>
                <a href="#tazz2" id="tab4">
                <span class="icon icon-support"></span> {{ $phrases->where('slug', 'materials')->first()->value ?? '' }}</a>
            </li>
            <li>
                <a href="#tazz3" id="tab5" >
                    <span class="icon"></span>{{ $phrases->where('slug', 'tariffs')->first()->value ?? '' }}</a>
            </li>
            {{--<li>--}}
                {{--<a href="#tazz4" id="tab2">--}}
                    {{--<span class="icon icon-bubbles"></span> {{ $phrases->where('slug', 'reviews')->first()->value ?? '' }} </a>--}}
            {{--</li>--}}
        </ul>
    </div>
    <!-- end /.item-navigation -->
@endsection