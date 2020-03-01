<?php

use \App\Model\Page;

/* @var $page Page */

?>
@extends('../layout')
@section('content')
    <div class="container">
        <div class="main-container">
            <main class="main">
                <h1>{{$page->title}}</h1>
                {!! $page->body !!}
            </main>
            @if(count($serviceItems))
                <aside class="aside theaside">
                    <ul>
                        <h4>Список услуг</h4>
                        @foreach($serviceItems as $item)
                            <? /* @var $item Page */ ?>
                            <a href="/{{\App\Model\Page::SLUG_SERVICE_PAGE}}/{{$item->slug}}">
                                {{$item->title}}
                            </a>
                        @endforeach
                    </ul>
                </aside>
            @endif
        </div>
    </div>
@endsection
