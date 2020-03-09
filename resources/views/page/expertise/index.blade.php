<?php  /* @var $page \App\Model\Page */ ?>
@extends('../layout')
@section('content')
    @include('../blocks/index/expertises')
    <div class="container">
        <div>
            {!! $page->body !!}
        </div>
    </div>
@endsection
