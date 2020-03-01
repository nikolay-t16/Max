<?
use \App\Model\TCG\ExpertiseType;
use \App\Model\Page;
?>
<h2 class="text-center">{{$expertiseTitle}}</h2>
<div class="banner">
    <div class="ms-index-exp-list container">
        @foreach ($expertise as $expertiseItem)
            <? /* @var $expertiseItem ExpertiseType */ ?>
                <div class="ms-index-exp" style="background-image:url(http://kubexp.ru/gallery/3030c3.svg)">
                    <div class="ms-index-exp-h1">{{$expertiseItem->name}}</div>
                    @foreach ($expertiseItems[$expertiseItem->id] as $item)
                        <? /* @var $item Page */ ?>
                        <a href="/expertise/{{$item->slug}}">{{$item->title}}</a>
                    @endforeach
                </div>
        @endforeach
        @if (!isset($hideAllExpertiseBtn))
            <div class="centered"><a href="/expertise" class="button button_theme_red">Все экспертизы</a></div>
        @endif
    </div>
</div>
