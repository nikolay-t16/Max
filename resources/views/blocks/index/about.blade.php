<? /* @var $about \App\Model\Page */ ?>
<div class="desc">
    {!! $about->excerpt !!}
    <a class="button button_theme_red" href="/{{$about->slug}}">
        <span class="button__text">Подробнее</span>
    </a>
</div>
