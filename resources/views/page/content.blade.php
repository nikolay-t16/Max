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
        </div>
    </div>
@endsection
