@extends('../layout')
@section('content')
    <div class="container">
        @include('../blocks/index/expertises')
        @include('../blocks/index/documents')
        <div>
            @include('../blocks/index/about')
        </div>
    </div>
@endsection
@section('baner')
    @include('../blocks/index/banner')
@endsection
