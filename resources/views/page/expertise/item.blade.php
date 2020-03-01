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
            @if(count($expertiseItems))
                <aside class="aside theaside">

                    <ul>
                        <h4>{{$page->expertise->name}}</h4>
                        @foreach($expertiseItems as $item)
                            <? /* @var $item Page */ ?>
                            <a href="/expertise/{{$item->slug}}">
                                {{$item->title}}
                            </a>
                        @endforeach
                    </ul>
                </aside>
            @endif
        </div>
    </div>
@endsection
