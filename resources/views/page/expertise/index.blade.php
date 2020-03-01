<?php  /* @var $page \App\Model\Page */ ?>
@extends('../layout')
@section('content')
    <div class="container">
        @include('../blocks/index/expertises')
        <div>
            {!! $page->body !!}
        </div>
    </div>
@endsection
