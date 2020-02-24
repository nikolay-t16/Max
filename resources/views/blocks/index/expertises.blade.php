<?
use \App\Model\TCG\ExpertizeType;
use \App\Model\Page;
?>
<h2 class="superh">Поппулярные экспертизы</h2>
<div class="banner">
    <div class="ms-index-exp-list container">
        @foreach ($expertize as $expertizeItem)
            <? /* @var $expertizeItem ExpertizeType */ ?>
                <div class="ms-index-exp" style="background-image:url(http://kubexp.ru/gallery/3030c3.svg)">
                    <div class="ms-index-exp-h1">{{$expertizeItem->name}}</div>
                    @foreach ($expertizeItems[$expertizeItem->id] as $item)
                        <? /* @var $item Page */ ?>
                        <a href="/{{$item->slug}}">{{$item->title}}</a>
                    @endforeach
                </div>
        @endforeach
        <div class="centered"><a href="/expertise" class="button button_theme_red">Все экспертизы</a></div>
    </div>
</div>
