<? /* @var $doccumentsPage \App\Model\Page */ ?>
<div class="doccuments-index">
    <div class="doccuments-index__index-img ms-index-cert-1">
        <img src="http://kubexp.ru/img/cert_index_1.jpg">
    </div>
    <div class="doccuments-index__index-img ms-index-cert-2">
        <img src="http://kubexp.ru/img/cert_index_2.jpg">
    </div>
    <div class="doccuments-index__index-text ms-index-cert-about">
        <h2>{{$doccumentsPage->title}}</h2>
        <div>
            {{strip_tags($doccumentsPage->excerpt)}}
            <br>
            <br>
            <a href="/{{$doccumentsPage->slug}}" class="button button_theme_red">Подробнее</a>
        </div>
    </div>
</div>
