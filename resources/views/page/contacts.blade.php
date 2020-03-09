<?php

use \App\Model\Page;

/* @var $page Page */

?>
@extends('../layout')
@section('content')
    <div class="container">
        <div class="main-container">
            <main class="main">
                <h1>Контакты в Москве</h1>
                <div class="office row row_margin">
                    <div class="office__form col col_sm-4">
                        {!! $page->body !!}
                    </div>
                    <div class="office__map col col_sm-8">

                    </div>
                    <div class="col col_sm-12" style="padding-top: 10px;color: grey;font-size: 12px;">
                        {!! strip_tags($page->excerpt) !!}
                    </div>
                    <style>
                        .map-baloon__img-wrap {
                            display: none;
                        }
                    </style>
                </div>
            </main>
        </div>
    </div>
@endsection
