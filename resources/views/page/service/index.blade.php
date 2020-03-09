<?php  /* @var $page \App\Model\Page */ ?>
@extends('../layout')
@section('content')
    <div class="container">
        <h2 class="text-center">{{$page->title}}</h2>
        <div class="banner">
            @foreach ($serviceItems as $item)
                <? /* @var $item \App\Model\Page */ ?>
                <div class="ms-index-exp" style="background-image:url(http://kubexp.ru/gallery/3030c3.svg)">
                    <div class="ms-index-exp-h1"><a
                            href="/{{\App\Model\Page::SLUG_SERVICE_PAGE}}/{{$item->slug}}">{{$item->title}}</a></div>
                    {!! $item->excerpt !!}
                </div>
            @endforeach
        </div>
        <div>
            {!! $page->body !!}
        </div>
    </div>
@endsection
